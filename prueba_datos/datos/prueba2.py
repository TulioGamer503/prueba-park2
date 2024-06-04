from flask import Flask, render_template_string
import serial
import serial.tools.list_ports
import time
import os
import sys

app = Flask(__name__)

def find_arduino_port():
    ports = list(serial.tools.list_ports.comports())
    for p in ports:
        if 'Arduino' in p.description:
            return p.device
    return None

arduino_port = find_arduino_port()
if arduino_port is None:
    print("Arduino not found")
else:
    print(f"Arduino found on {arduino_port}")
    try:
        if os.name == 'nt':  # Windows
            import ctypes
            if not ctypes.windll.shell32.IsUserAnAdmin():
                print("Please run the script as Administrator.")
                sys.exit()

        ser = serial.Serial(arduino_port, 9600, timeout=1)
        time.sleep(2)  # Wait for the serial connection to initialize
    except serial.SerialException as e:
        print(f"Failed to connect to Arduino: {e}")
        ser = None

def read_sensor_data():
    if ser is None:
        return []
    
    try:
        ser.write(b'R')  # Send a command to Arduino to get data
        line = ser.readline().decode('utf-8').strip()
        return [int(value) for value in line.split()]
    except Exception as e:
        print(f"Error reading sensor data: {e}")
        return []

@app.route('/')
def index():
    sensor_data = {
        'Sensor1': 'Sin datos',
        'Sensor2': 'Sin datos',
        'Sensor3': 'Sin datos',
        'Sensor4': 'Sin datos'
    }
    
    try:
        data = read_sensor_data()
        if len(data) == 4:
            sensor_data = {
                'Sensor1': 'Objeto detectado' if data[0] == 0 else 'Sin objeto',
                'Sensor2': 'Objeto detectado' if data[1] == 0 else 'Sin objeto',
                'Sensor3': 'Objeto detectado' if data[2] == 0 else 'Sin objeto',
                'Sensor4': 'Objeto detectado' if data[3] == 0 else 'Sin objeto'
            }
    except Exception as e:
        print(f"Error processing sensor data: {e}")

    return render_template_string('''
    <html>
        <head>
            <title>Sensor Data</title>
        </head>
        <body>
            <h1>Sensor Data</h1>
            <ul>
                {% for sensor, value in sensor_data.items() %}
                <li>{{ sensor }}: {{ value }}</li>
                {% endfor %}
            </ul>
        </body>
    </html>
    ''', sensor_data=sensor_data)

if __name__ == '__main__':
    app.run(debug=True)
