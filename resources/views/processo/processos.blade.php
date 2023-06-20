@extends('layouts.main')

@section('title', 'Inscritos via online')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <h1>PROCESSOS DE ALUNOS</h1>      
            </div>
        
            <div class="col-lg-5">
            <select class="btn-sel form-select" name="opcoes" id="filtro5">
                <option selected disabled>Curso</option>
                <option value="Desenhador projetista">Desenhador projetista</option>
                <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                <option value="Informática">Informática</option>
                <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
            </div> 
        
        </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número de processo ou o número do B.I do Aluno" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
    </div>

    <!-- /  Inicio da tabela de inscritos -->
    <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">Número do BI</th>
          <th scope="col">Nome do Candidato</th>
          <th scope="col">Processo</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Período</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>

      <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">Número do BI</th>
          <th scope="col">Nome do Candidato</th>
          <th scope="col">Processo</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Período</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
        @foreach($candidatos as $candidato)
          <tr  style=" text-align: center;">
          <th scope="row">{{ $candidato['num_bi'] }}</th>
          <td>{{ $candidato['nome_completo'] }}</td>
          <td>{{ $candidato['num_processo'] }}</td>
          <td>{{ $candidato['nome_turma'] }}</td>
          <td>{{ $candidato['nome_curso'] }}</td>
          <td>{{ $candidato['nome_turno'] }}</td>
          <td>
          <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver Processo</a>
          <i class="bi bi-trash-fill"></i>
          </td>
          </tr>
        @endforeach   
          <tr  style=" text-align: center;">
          <th scope="row">0000000KJ000098</th>
          <td>Fernando Exemplo</td>
          <td>494040</td>
          <td>I12DT</td>
          <td>Desenhador projetista</td>
          <td>Manhã</td>
          <td>
              <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver Processo</a>
              <i class="bi bi-trash-fill"></i>
          </td>
          </tr>
      </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
    
</main>
@endsection