@extends('painel')

@section('content')


<h1 class="titulo-painel">{{$titulo}}</h1>
<div class="divider"></div><br>
<div class="cadastros">


    @if(isset($usuario))
    <form method="post"  action="{{url('/tipo_prod/salvaedit',$usuario->id)}}" id="editar">
        {!!method_field("PUT")!!}

        @else
        <form method="post" action="{{url('/tipo_prod/salvar')}}" id="salvar" >

            @endif
            {!! csrf_field() !!}



            <div class="form-row">



              <div class="form-group">
                <label >Nome do Tipo de Produto</label>

                <input type="text" name="ds_tipo_produto" class="form-control" value=""  placeholder="Manufaturados">
              </div>





            </div>


















<br><br>
        <div class="divider"></div><br><br>
        <center>
            <input type="submit"  value="Cadastrar" class="btn btn-primary" >
            <a href="{{url('/')}}"   class="btn btn-danger"   >Cacelar</a>
        </center>
        </form>
<br><br>
</div>






@endsection






