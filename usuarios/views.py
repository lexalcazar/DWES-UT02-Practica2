
from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

def usuario_view(request):
    datos = {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@example.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }    
    pagos_html = ""
    for mes, importe in datos['pagos'].items():
        pagos_html += f"<tr><td>{mes.title()}</td><td>{importe} €</td></tr>"
    html = f"""
    
    <html>
        <head><title>Datos de un Usuario</title></head>
        <body>
            <h1>Información personal</h1>
            <!--Para incluir datos que se encuentran en la vista, usamos llaves como se ve a continuación -->
            <p><strong>Mi Nombre:</strong> {datos['nombre']}</p>
            <p><strong>DNI:</strong> {datos['dni']}</p>
            <p><strong>Email:</strong> {datos['email']}</p>
            <p><strong>Teléfono:</strong> {datos['telefono']}</p>

                   <h2>Pagos</h2>
            <table border="1" cellpadding="5">
                <tr>
                    <th>Mes</th>
                    <th>Importe (€)</th>
                </tr>
                {pagos_html}
            </table>
            
        </body>
    </html>
    """
    
    return HttpResponse(html)
