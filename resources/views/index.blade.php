<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FUT Watcher</title>
    <livewire:styles />
</head>
<body>
<div id="app">
    <h2>Fifa Ultimate Team Watcher</h2>

    <table class="blueTable">
        <tr>
            <th>Nome</th>
            <th>Preço de compra</th>
            <th>Preço atual</th>
            <th>Lucro</th>
            <th>Ações</th>
        </tr>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ number_format($player->purchase_price, 2, '.', ',') }}</td>
                <td>{{ number_format($player->current_price, 2, '.', ',') }}</td>
                <td class="{{ $player->profitClass }}">{{ number_format($player->profit, 2, '.', ',') }}</td>
                <td>
                    <button @click="updatePrice()" class="btn" alt="Atualizar preço"><i class="fa fa-money"></i>$</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<livewire:counter />
<livewire:scripts />
</body>
</html>
