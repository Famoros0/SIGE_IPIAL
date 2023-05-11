@extends('layouts.main')

@section('title', 'Inscritos via online')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <h1>Pautas</h1>      
            </div>
        
            <div class="col-lg-2">
            <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                <option disabled selected>Turma</option>
                <option value="I10AM">I10AM</option>
                <option value="I11AM">I11AM</option>
                <option value="I12AT">TI12AT</option>
                <option value="I13AT">I13AM</option>
            </select>
            </div> 

            <div class="col-lg-5">
            <select class="btn-sel form-select" name="opcoes" id="filtro4">
                <option selected disabled>Curso</option>
                <option value="Desenhador projetista">Desenhador projetista</option>
                <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                <option value="Informática<">Informática</option>
                <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
            </div> 
        
        </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Ano da Pauta que procuras" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
    </div>

    <!-- /  Inicio da tabela de inscritos -->
    <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">ANO</th>
          <th scope="col">classe</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Periodo</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
          <tr  style=" text-align: center;">
          <th scope="row">2021-2022</th>
          <td>11ª</td>
          <td>I11AM</td>
          <td>Informática</td>
          <td>Manhã</td>
          <td>
          <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver Pauta</a>
          </td>
          </tr>
          
          <tr  style=" text-align: center;">
          <th scope="row">2020-2021</th>
          <td>13ª</td>
          <td>I13BT</td>
          <td>Desenhador projetista</td>
          <td>Tarde</td>
          <td>
              <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver Pauta</a>
          </td>
          </tr>
      </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
    
</main>
@endsection