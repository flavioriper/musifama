<style>
  
  .logo-inscricao {
    padding: 30px 0 80px 30px;
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
    overflow: hidden;
  }

  .custom-file-label {
    overflow: hidden;
  }

  .candidato-descricao {
    font-family: 'Gilroy-Regular';
  }

  .candidato-descricao .nome {
    font-size: 22px;
    font-weight: bolder;
  }

  .candidato-descricao .nome > small {
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
  }

  .candidato-descricao .container-votos {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 22px;
  }

  .candidato-descricao .votar {
    background-color: rgb(96,32,115);
    color: #fff;
    padding: 5px 10px;
    margin-left: 5px;
    cursor: pointer;
  }

  .titulo-musica {
    font-weight: bolder;
  }

  @media only screen and (max-width: 450px) {
    .inscricao-container {
      width: 90%!important;
    }

    .candidato-container {
      padding: 50px 10px!important;
    }

    .foto-artista {
      margin: 0px auto!important;
    }

    .candidato-descricao .nome {
      margin-top: 20px;
    }

    .candidato-descricao .descricao {
      margin-bottom: 20px!important;
    }

    .candidato-container .footer {
      margin-top: 20px;
    }

    .candidato-descricao .container-votos {
      justify-content: center;
      margin-bottom: 20px!important;
    }

    .candidato-descricao .redes {
      text-align: center!important;
    }
  }

</style>
