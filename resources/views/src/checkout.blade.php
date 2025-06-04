<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Checkout - MV TOMORROW</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="body">
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="logoImg">
            </div>

            <nav>
                <ul id="menuItens">
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li><a href="">Produtos</a></li>
                    <li><a href="">Minha Conta</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li>
                        <a href="" class="cart">
                            <i class="bi bi-bag-fill"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="hamburger" onclick="toggleMenu()">
                <i class="bi bi-list"></i>
            </div>
        </div>
    </div>

    <main class="checkout-container">
        <section class="billing">
            <h2>Detalhes de Faturamento</h2>
            <form>
                <input type="text" placeholder="Nome completo" required />
                <input type="text" placeholder="Endereço" required />
                <input type="text" placeholder="Cidade" required />
                <input type="text" placeholder="País" required />
                <input type="text" placeholder="CEP" required />
                <input type="tel" placeholder="Telefone" required />
                <input type="email" placeholder="E-mail" required />
                <textarea placeholder="Informações adicionais..."></textarea>
            </form>
        </section>

        <section class="cart-summary">
            <h2>Resumo do Pedido</h2>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Camiseta Vermelha x2</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>Calça Esportiva x1</td>
                        <td>$80.00</td>
                    </tr>
                    <tr>
                        <td>Tênis Esportivo x1</td>
                        <td>$120.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Subtotal</td>
                        <td>$300.00</td>
                    </tr>
                    <tr>
                        <td>Frete</td>
                        <td>Grátis</td>
                    </tr>
                    <tr class="total">
                        <td>Total</td>
                        <td>$300.00</td>
                    </tr>
                </tfoot>
            </table>

            <div class="payment">
                <h3>Pagamento</h3>
                <label><input type="radio" name="payment" checked /> Pix</label>
                <label><input type="radio" name="payment" /> Boleto</label>
                <label><input type="radio" name="payment" /> Cartão de Crédito</label>
                <button type="button">Finalizar Pedido</button>
            </div>
        </section>
    </main>

</body>

</html>
