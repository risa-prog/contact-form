@extends('layouts.default')

@section('content')

    
    <h1 class="confirm-title">お問い合わせ内容確認</h1>
    <form class="confirm" action="/contacts" method="post">
        <table class="confirm__table">
            @csrf
            <tr class="confirm__table__row">
                <th class="confirm__table__header">
                    お名前
                </th>
                <td class="confirm__table__content">
                    <input type="text" name="name" value="{{$contact['name']}}" readonly>
                </td>
            </tr>
            <tr class="confirm__table___row">
                <th confirm__table__header>
                    メールアドレス
                </th>
                <td class="confirm__table__content">
                    <input type="email" name="email" value="{{$contact['email']}}" readonly>
                </td>
            </tr>
            <tr class="confirm__table__row">
                <th confirm__table__header>
                    電話番号
                </th>
                <td class="confirm__table__content">
                    <input type="tel" name="tel" value="{{$contact['tel']}}" readonly>
                </td>
            </tr>
            <tr class="conform-table__row">
                <th confirm__table__header>
                    お問い合わせ内容
                </th>
                <td class="confirm__table__content">
                    <input type="text" name="content" value="{{$contact['content']}}" readonly>
                </td>
            </tr>
        </table>
        <input class="confirm__input" type="submit" value="送信">

    </form>

@endsection



