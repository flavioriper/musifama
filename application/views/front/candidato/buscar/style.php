<style>
  .logo-inscricao {
    padding: 30px 0 80px 30px;
  }

  .form-control {
    display: inline-block;;
    width: 70%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    margin-right: 20px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: transparent;
    background-clip: padding-box;
    border-bottom: 1px solid #9c9c9c!important;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-radius: 0px!important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
  }

  .form-control:active, .form-control:focus {
    background-color: inherit!important;
  }

  .inscricao-header h1 {
    font-family: 'Raleway-Bold';
    font-weight: bolder;
  }

  .title-strips-over {
    width: 230px;
    height: 1px;
    padding: 0 !important;
    background-color: rgba(255,255,255,0.4);
    position: relative;
    margin: 30px auto!important;
  }

  .title-strips-over.dark {
    background-color: rgba(0,0,0,0.2);
  }

  .dark, .dark-hover:hover {
    color: #333 !important;
  }

  .title-strips-over.dark:before {
    background-color: rgba(0,0,0,0.3);
  }

  .btn-primary {
    background-color: rgb(138, 82, 173) !important; 
    border-color: rgb(138, 82, 173) !important; 
    margin-bottom: 2px;
  }

  .foto-artista {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    background-color: rgb(225,231,232);
    width: 300px;
    height: 300px;
    max-height: 250px;
    overflow: hidden;
}

  .custom-file-label {
    overflow: hidden;
  }

  .candidatos-container {
    padding: 0px 20px 50px 20px;
  }

  .container-candidato {
    padding: 5px 20px 20px 20px;
    box-shadow: 0px 0px 30px 1px rgba(0, 0, 0, 0.1);
  }

  .container-candidato .line-card {
    height: 65px;
    float: left;
    position: relative;
    margin-left: -23px;
    margin-top: 230px;
    width: 4px;
    background-color: rgb(175,79,177);
  }

  .container-candidato img {
    max-height: 250px;
    max-width: 100%;
  }

  .container-candidato .nome {
    font-family: 'Raleway-Medium';
    text-align: left;
    color: rgb(187,187,187);
    font-size: 26px;
    padding: 10px 0;
  }

  .container-candidato .descricao {
    text-align: justify;
    min-height: 230px;
  }

  #busca-candidatos {
    font-family: 'Gilroy-Regular';
  }

  .container-candidato .footer {
    font-family: 'Gilroy-Regular';
  }

  .container-candidato .container-votos {
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }

  .container-candidato .votar {
    background-color: rgb(96,32,115);
    color: #fff;
    padding: 5px 10px;
    margin-left: 5px;
    cursor: pointer;
  }

  .container-candidato .leia-mais {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }

  .container-candidato .leia-mais > .botao {
    color: inherit;
  }

  .container-candidato .leia-mais > .botao:hover {
    text-decoration: none;
  }

  @media only screen and (max-width: 450px) {
    .form-control {
      max-height: 100px;
      margin-bottom: 10px;
    }

    #enviar-inscricao {
      float: right;
    }
  }

</style>
