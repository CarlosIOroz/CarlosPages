<a href="https://cooltext.com"><img src="https://images.cooltext.com/5649923.png" width="1051" height="108" alt="Pantalla ILI9341 2.8'' TFT-LCD" /></a>
<br />

# *¿Qué es la pantalla ILI9341?*
### Es un tipo de pantalla de cristal líquido (LCD) de matriz activa y color que se utiliza comúnmente en dispositivos electrónicos como teléfonos inteligentes, tabletas, relojes inteligentes y otros dispositivos portátiles. 


# *Especificaciones técnicas*

<table class="tg">
<tbody>
  <tr>
    <td class="tg-0pky">Resolución de 320x240 píxeles</td>
    <td class="tg-0pky">Tamaño de pantalla de 2.2 pulgadas</td>

  </tr>
  <tr>
    <td class="tg-0pky">Interfaz de comunicación SPI</td>
    <td class="tg-0pky">Velocidad de actualización de imagen alta</td>

  </tr>
</tbody>
</table>

# *Ventajas*
<table class="tg">
<tbody>
  <tr>
    <td class="tg-0pky">Bajo costo</td>
  </tr>
    <tr>
    <td class="tg-0pky">Tamaño compacto</td>
  </tr>
  <tr>
    <td class="tg-0pky">Buena calidad de imagen en color</td>
  </tr>
  <tr>
    <td class="tg-0pky">Compatible con una amplia gama de microcontroladores y sistemas integrados</td>
  </tr>
  
</tbody>
</table>


# *Usos comunes*
<table class="tg">
<tbody>
  <tr>
    <td class="tg-0pky">Dispositivos portátiles (teléfonos inteligentes, tabletas, relojes inteligentes)</td>
  </tr>
    <tr>
    <td class="tg-0pky">Proyectos DIY y prototipos</td>
  </tr>
  <tr>
    <td class="tg-0pky">Aplicaciones industriales</td>
  </tr>
  
</tbody>
</table>

# *Ejemplo*

### Se imprime el color azul en toda la pantalla ili9341
### ![imagen](https://user-images.githubusercontent.com/118245002/226797302-037d45d5-3517-4090-8f17-223b40e72385.png)

### Has clic [aqui](https://wokwi.com/projects/359129543378762753) para entrar a el proyecto en Wokwi

# *Codigo*
```python
import machine
import utime

# Define las conexiones del display
cs = machine.Pin(17, machine.Pin.OUT)
dc = machine.Pin(15, machine.Pin.OUT)
rst = machine.Pin(16, machine.Pin.OUT)
mosi = machine.Pin(3, machine.Pin.OUT)
miso = machine.Pin(4, machine.Pin.IN)
sclk = machine.Pin(2, machine.Pin.OUT)

# Configura el display para la comunicación SPI
spi = machine.SPI(0, baudrate=40000000, polarity=0, phase=0, sck=sclk, mosi=mosi)

# Configura las dimensiones del display
WIDTH = 240
HEIGHT = 320

# Configura la función de envío de datos al display
def send_data(data):
    dc.high()
    cs.low()
    spi.write(data)
    cs.high()

# Configura la función de envío de comandos al display
def send_command(command):
    dc.low()
    cs.low()
    spi.write(command)
    cs.high()

# Configura el display
send_command(b'\x01') # Reinicia el display
utime.sleep_ms(10)
send_command(b'\x11') # Sal del modo de reposo
send_command(b'\x3A\x55') # Establece el modo de color a 16 bits
send_command(b'\x36\x08') # Establece la dirección de escaneo
send_command(b'\x29') # Enciende el display

# Establece el color de fondo en azul
send_command(b'\x2A') # Establece la posición horizontal
send_data(bytes([0x00, 0x00, 0x00, 0xEF]))
send_command(b'\x2B') # Establece la posición vertical
send_data(bytes([0x00, 0x00, 0x01, 0x3F]))
send_command(b'\x2C') # Inicia la escritura de píxeles

# Llena la pantalla con el color azul
for i in range(WIDTH * HEIGHT):
    send_data(bytes([0xFF, 0xE0]))
```



