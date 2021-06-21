$(function(){
    // Ativando a mascara nos campos
    $("[data-mask]").inputmask();
    
    // Iniciando dataTable
    $('#clients').dataTable({
        // Internationalisation. For more info refer to http://datatables.net/manual/i18n
        "bLengthChange": true,
        "language": {
            "aria": {
                "sortAscending": ": Ordenar em ordem crescente",
                "sortDescending": ": Ordenar em ordem descrecente"
            },
            "emptyTable": "Nenhum resultado encontrado",
            "info": "",
            "infoEmpty": "Nenhum resultado encontrado",
            "infoFiltered": "(Filtrando de _MAX_ registros)",
            "lengthMenu": "_MENU_ por página",
            "search": "Busca:",
            "zeroRecords": "Nenhum resultado encontrado"
        },
        buttons: [
        ],
        responsive: {
            details: {

            }
        },
        "bPaginate": true,
        "orderClasses": false,
        "order": [
            [0, 'asc']
        ],
        // set the initial value
        "pageLength": 10,
        "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
    });
});

// Carregando modal de cliente para realizar inserção
function cliAddModal() {
    // Exibindo o modal
    $('#client_form').modal('show');
    // Limpa todos os campos antes de carregar os dados para editar
    clearFields();
}

// Carregando modal com dados de cliente para realizar edição
function cliEditModal(id) {
    // Exibindo o modal
    $('#client_form').modal('show');
    // Limpa todos os campos antes de carregar os dados para editar
    clearFields();
    
    // Buscando dados do cliente para editar
    var _url = 'clients/'+id;
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#client_id").val(response.id);
            $("#name").val(response.name);
            $("#birth_date").val(formatDate(response.birth_date,'pt-br'));
            $("input[name='sex'][value='"+response.sex+"']").attr("checked", true);
            $("#zip_code").val(response.zip_code);
            $("#address").val(response.address);
            $("#address_number").val(response.address_number);
            $("#address_complement").val(response.address_complement);
            $("#district").val(response.district);
            $("#city").val(response.city);
            $("#state").val(response.state);
          }
      }
    });
}

// Carregando dados de endereço do cliente por meio de api
function cliGetInformationZipCode() {
    var cep = Trim($("#zip_code").val());
    //Nova variável "cep" somente com dígitos.
    var cep_tratado = cep.replace(/\D/g, '');
    // Validando cep
    if (cep_tratado.length == 8) {
        var url = "https://viacep.com.br/ws/"+cep_tratado+"/json";
        // Buscando informaçoes VIACEP
        $.ajax({
          url: url,
          type: "GET",
          success: function(response) {
              if (response) {
                $("#address").val(response.logradouro);
                $("#address_complement").val(response.complemento);
                $("#district").val(response.bairro);
                $("#city").val(response.localidade);
                $("#state").val(response.uf);
                $("#address_number").focus();
              }
          }
        });
    }
}

// Carregando modal de confirmação de exclusão do cliente
function cliDeleteModal(id) {
    $('#clientdel_id').val(id);
    $('#client_destroy').modal('show');
}

// Não deixar digitar nada fora número no campo
function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) {
        return true;
    } else {
        if (tecla == 8 || tecla == 0) {
            return true;
        } else {
            return false;
        }
    }
}

// Substitúi os espaços vazios no inicio e no fim da string por vazio.
function Trim(strTexto) {
    return strTexto.replace(/^\s+|\s+$/g, '');
}

// Função para formatar data
function formatDate(data, formato) {
  if (formato == 'pt-br') {
    return (data.substr(0, 10).split('-').reverse().join('/'));
  } else {
    return (data.substr(0, 10).split('/').reverse().join('-'));
  }
}

function clearFields() {
    $("#client_id").val("");
    $("#name").val("");
    $("#birth_date").val("");
    $("input[name='sex'][value='']").attr("checked", false);
    $("#zip_code").val("");
    $("#address").val("");
    $("#address_number").val("");
    $("#address_complement").val("");
    $("#district").val("");
    $("#city").val("");
    $("#state").val("");
}
