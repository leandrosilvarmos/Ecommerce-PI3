@extends('layouts.app')
@section('content')
<section class="banner-bg">

    <div class="banner">


        <div class="banner-img">
            <img src="img/banner1.jpg" alt="">
        </div>

        <div class="banner-conteudo">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptas maiores! Corrupti eaque
                maxime nemo itaque inventore sunt ea quibusdam consequuntur doloremque nesciunt eveniet delectus
                aliquid quasi placeat, dolores culpa!</p>
        </div>

    </div>

</section>


<section class="produtos">


    <div class="produtos-item one">
        <a href=""> Produtos</a>
    </div>
    <div class="produtos-item two">
        <a href=""> Produtos</a>
    </div>
    <div class="produtos-item thre">
        <a href=""> Produtos</a>
    </div>
    <div class="produtos-item for">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, molestiae obcaecati. Quis numquam aut
            saepe cum dolorum. Vel suscipit tenetur ex, velit reiciendis ratione vero facere dolores commodi,
            inventore itaque!</p>
    </div>
    <div class="produtos-item five">
        <a href=""> Produtos</a>
    </div>


</section>

<section class="destaques">

    <h2>Destaques </h2>

    <div class="destaques-container">
        <div class="destaques-item">
            <img src="img/produtos1.jpg" alt="">
            <div class="middle">
                <h2> Adicionar ao Carinho</h2>
            </div>
        </div>
        <div class="destaques-item">
            <img src="img/produtos2.jpg" alt="">
            <div class="middle">
                <h2> Adicionar ao Carinho</h2>
            </div>
        </div>
        <div class="destaques-item ">
            <img src="img/produtos3.jpg" class="image" alt="">
            <div class="middle">
                <h2> Adicionar ao Carinho</h2>
            </div>
        </div>
    </div>


</section>


<section class="info">
    <div class="info-container">
        <div class="info-item">
            <h2> Pronta Entrega</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima commodi odit obcaecati libero,
                assumenda fuga eum perferendis totam.</p>
        </div>
        <div class="info-item">
            <h2> Garantia</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima commodi odit obcaecati libero,
                assumenda fuga eum perferendis totam.</p>
        </div>
        <div class="info-item">
            <h2> Qualidade</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima commodi odit obcaecati libero,
                assumenda fuga eum perferendis totam.</p>
        </div>
    </div>
</section>
@endsection
