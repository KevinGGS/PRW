<?php

    $capital = $_GET['termos'];

    switch ($capital) {
        case "Acre":
          echo "Rio Branco";
          break;
        case "Alagoas":
          echo "Maceió";
          break;
        case "Amazonas":
          echo "Manaus";
          break;
        case "Amapá":
          echo "Macapá";
          break;
        case "Bahia":
          echo "Salvador";
          break;
        case "Ceará":
          echo "Fortaleza";
          break;
        case "Distrito Federal":
          echo "Brasília";
          break;
        case "Espírito Santo":
          echo "Vitória";
          break;
        case "Goiás":
          echo "Goiânia";
          break;
        case "Maranhão":
          echo "São Luís";
          break;
        case "Minas Gerais":
          echo "Belo Horizonte";
          break;
        case "Mato Grosso do Sul":
          echo "Campo Grande";
          break;
        case "Mato Grosso":
          echo "Cuiabá";
          break;
        case "Pará":
          echo "Belém";
          break;
        case "Paraíba":
          echo "João Pessoa";
          break;
        case "Pernambuco":
          echo "Recife";
          break;
        case "Piauí":
          echo "Teresina";
          break;
        case "Paraná":
          echo "Curitiba";
          break;
        case "Rio de Janeiro":
          echo "Rio de Janeiro";
          break;
        case "Rio Grande do Norte":
          echo "Natal";
          break;
        case "Rondônia":
          echo "Porto Velho";
          break;
        case "Roraima":
          echo "Boa Vista";
          break;
        case "Rio Grande do Sul":
          echo "Porto Alegre";
          break;
        case "Santa Catarina":
          echo "Florianópolis";
          break;
        case "Sergipe":
          echo "Aracaju";
          break;
        case "São Paulo":
          echo "São Paulo";
          break;
        case "Tocantins":
          echo "Palmas";
          break;
        default:
          echo "Estado não encontrado";
          break;
      }

?>