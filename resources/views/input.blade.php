@extends("layout.layouts")

@section("content")

    <form action="/inputHandel" method="post">
        <?php
        $rowHeight = 50;    //每一行的高度
        ?>
        <table>
            <tr>
                <td><label>输入</label></td>
                <td><textarea height="{{$rowHeight}}" name="inputText" placeholder="请输入"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

@endsection