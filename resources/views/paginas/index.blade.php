@extends('layouts.master_site')

@section('pagina')
    <nav class="navbar navbar-light" style=" background-color: #C0C0C0; justify-content: center">
         <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Digite sua Pesquisa" aria-label="Search" style="width:300px ">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" ><i class="fas fa-search"></i> Pesquisar</button>
        </form>
        <form class="form-inline">
            <button class="btn btn-info my-2 my-sm-0 btn-lg" type="submit"><i class="fas fa-filter"></i> Filtrar</button>
        </form>
    </nav>
@endsection