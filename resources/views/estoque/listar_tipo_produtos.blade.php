@extends('painel')

@section('content')


<div class="panel-row">


<h5 >{{$titulo}}</h5><!--teste 2 git-->
@if (Session::has('message'))
<div class="alert alert-success" role="alert"><center>{{Session::get('message')}}</center></div>

@endif


<div class="divider"></div>
<div class="col-md-12">
    <div class="col-md-2">
        <form class="form-login form-inline">
            <a href="{{url('/tipo_prod_cadastrar')}}" class="btn btn-success"  value="Novo Cadastro" >Novo</a>

        </form>
    </div>&nbsp;

    <div class="col-md-10 " style="float: right">
    <form action="{{url('/doadores/pesquisa')}}" method="get">
        <div class="col-md-2" style="float: right">
        <button class="btn btn-info" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
        </div>
<div class="col-md-8" style="float: right">
    <input class="form-control" name="palavraChave" type="text" placeholder="Digite o Nome"/>
</div>



    </form>
    </div>


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
            <a href="" class="imprimir" >
                <i class="fa fa-print" aria-hidden="true"></i>


            </a>
        </td>
        <td>
            <a  href="" class="editar">

                <i class="fas fa-edit" aria-hidden="true"></i>
            </a>
        </td>
        <td>
            <a href="" class="delete"onclick="acaoBotao()" >
                <i class="far fa-trash-alt" aria-hidden="true"></i>
            </a>
        </td>
    </tr>

    @empty
    <p>Nenhum Tipo Produto cadastrado</p>
    @endforelse



</table>

<br><br><div class="divider"></div> <br><br>
<center>
    <a href="{{url('/')}}"   class="btn btn-danger"   >Cancelar</a>
    <a href="{{url('/tipo_produto/relatorio')}}"   class="btn btn-primary"   >Relatório</a>
</center>

</div>


@endsection
