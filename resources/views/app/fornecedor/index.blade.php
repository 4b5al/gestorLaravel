<h1>forncedor  </h1> 

{{--coments no ",blade"--}}

@php
    /*if (condition) {
        
    }elseif (condition) {
        
    }else {
        
    }*/

@endphp

    

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>nao Existem fornecedores cadastrados</h3>
@endif
