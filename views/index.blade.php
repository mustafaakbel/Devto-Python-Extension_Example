<button class="btn btn-primary mb-2" onclick="runScript()">Python scriptini çalıştır</button>
<div id="devtoPython"></div>

<script>
    function runScript(){
        var form = new FormData();
        request("{{API('runPythonScript')}}", form, function(response) {
            message = JSON.parse(response)["message"];
            $('#devtoPython').html(message);
        }, function(error) {
            $('#devtoPython').html("Hata oluştu");
        });
    }
</script>