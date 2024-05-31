<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Compra</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
        }
        h1, h2 {
            text-align: center;
        }
        .ticket {
            border: 1px dashed #000;
            padding: 10px;
        }
        .item {
            display: flex;
            justify-content: space-between;
        }
        .total, .footer {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @php
    $fecha_y_hora = date("Y-m-d H:i:s");
    @endphp
    <div class="ticket">
        <h1>La Taberna Del Blues</h1>
        <h2>Ticket de Compra</h2>
        <p>Fecha: @php echo $fecha_y_hora;@endphp</span></p>
        <table class='tabla table table-bordered table-hover'>
            <thead>
                <tr>
                    <th class="table-primary">Producto</th>
                </tr>
            </thead>
        </table>
        @foreach($productList as $producto)
            <div class="items">
                <div class="item">
                    <span>{{ $producto->nombre }}</span>
                    <span>{{ $producto->precio }} €</span>
                </div>
            </div>
        @endforeach
        <div class="total">
            <p><strong>Total: 100 €</strong></p>
        </div>
        <div class="footer">
            <p>¡Gracias por su compra!</p>
            <p>www.tracebetter.com</p>
        </div>
    </div>
</body>
</html>