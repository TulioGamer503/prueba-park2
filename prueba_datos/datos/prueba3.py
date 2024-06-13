from flask import Flask, render_template_string
import serial
import time

app = Flask(__name__)

# Configura el puerto serial. Asegúrate de cambiar 'COM3' al puerto correcto en tu sistema.
ser = serial.Serial('COM3', 9600, timeout=1)
time.sleep(2)  # Wait for the serial connection to initialize

def read_sensor_data():
    ser.write(b'R')  # Enviar un comando al Arduino para obtener los datos, ajusta según tu configuración
    line = ser.readline().decode('utf-8').strip()
    return [int(value) for value in line.split()]

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
        print(f"Error reading sensor data: {e}")

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
