import serial,time

# Configura el puerto serial. Asegúrate de cambiar 'COM3' al puerto correcto en tu sistema.
ser = serial.Serial('COM3', 9600)
time.sleep(3)  # Wait for the serial connection to initialize

def read_sensor_data():
    ser.write(b'R')  # Enviar un comando al Arduino para obtener los datos, ajusta según tu configuración
    line = ser.readline().decode('utf-8').strip()
    return [int(value) for value in line.split()]

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
