@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="container">

    <h1>Noticias</h1>
    <br>
    <h4>Manchete<h4>
    
            @foreach($dados as $value)

            <p>{{ $value->imagem1 }}<p>
            <br>
            <p>{{ $value->paragrafo1 }}<p>
            <br><br>
            <p>{{ $value->imagem2 }}<p>
            <br>
            <p>{{ $value->paragrafo2 }}<p>
            <br><br>
            <p>{{ $value->imagem3 }}<p>
            <br>
            <p>{{ $value->paragrafo3 }}<p>
            <br>
            <p>{{ $value->paragrafo3 }}<p>



            
                
                    
                   
                <td>
                
                   
                    
                </td>
                
            </tr>

            @endforeach
            
            </tbody>
        </table>
    </div>
</body>
</html>

@endsection