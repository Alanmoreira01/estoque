@extends('painel')

@section('content')


<div class="panel-row">


<h3 >{{$titulo}}</h3><!--teste 2 git-->
@if (Session::has('message'))
<div class="alert alert-success" role="alert"><center>{{Session::get('message')}}</center></div>

@endif


<div class="divider"></div>
<div class="col-md-12">
    <div class="col-md-2">
        <form class="form-login form-inline">
            <a href="{{url('/doadores/cadastrar')}}" class="btn btn-success"  value="Novo Cadastro" >Novo</a>

        </form>
    </div>

    <form action="{{url('/doadores/pesquisa')}}" method="get">

        <button class="btn btn-info" type="submit">Pesquisar</button>

        <div class="col-lg-6">
            <input class="form-control" name="palavraChave" type="text" placeholder="Digite o Nome"/>
        </div>

    </form>



</div><br><br>

<table class="table table-hover">
    <tr>
        <th>COD</th>
        <th>DESCRIÇÃO</th>
        <th>IMPRIMIR</th>
        <th>EDITAR</th>
        <th>EXCLUIR</th>


    </tr>
    @forelse($tipo_produtos as $tipo_prod)
    <tr>

        <td >{{$tipo_prod->id_tipo_produto}}</td>
        <td >{{$tipo_prod->ds_tipo_produto}}</td>




        <td>
            <a href="}}" class="imprimir" >
                <i class="fa fa-print" aria-hidden="true"></i>
            </a>
        </td>
        <td>
            <a  href="" class="editar">
                <i class="fab pencil" aria-hidden="true"></i>

            </a>
        </td>
        <td>
            <a href="" class="delete"onclick="acaoBotao()" >
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
        </td>
    </tr>

    @empty
    <p>Nenhum Item  de Estoque cadastrado</p>
    @endforelse



</table>

<br><br><div class="divider"></div> <br><br>
<center>
    <a href="{{url('/')}}"   class="btn btn-danger"   >Cancelar</a>
    <a href="{{url('/tipo+produto/relatorio')}}"   class="btn btn-primary"   >Relatório</a>
</center>

</div>


@endsection
