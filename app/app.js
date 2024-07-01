document.addEventListener('DOMContentLoaded', async function () {
    const ENTORNO = "PRODUCTION"
    const URL = {
        PRODUCTION: 'http://devcar0520-001-site14.etempurl.com/',
        DEVELOPMENT: 'https://localhost:7296/'
    }

    const IP = await fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => data.ip)
        .catch(error => null);

    let toinit;

    const dfMessenger = document.querySelector('df-messenger');
    dfMessenger.addEventListener('df-response-received', function (event) {
        let action = event.detail.response?.queryResult?.action || '';
        let correcto = action === 'input.unknown' ? false : true;
        let tiempo = action === 'input.welcome' ? 0 : (new Date().getTime() - toinit) / 1000;
        let respuesta;
        if (event.detail.response.queryResult?.fulfillmentMessages?.length > 1) {
            // postion 1
            respuesta = JSON.stringify(event.detail.response.queryResult.fulfillmentMessages[1]);
        } else {
            respuesta = event.detail.response.queryResult?.fulfillmentText || '';
        }


        const formData = new FormData();
        formData.append('username', IP);
        formData.append('registro.pregunta', event.detail.response.queryResult.queryText);
        formData.append('registro.respuesta', respuesta);
        formData.append('registro.intencion', event.detail.response.queryResult.intent.displayName);
        formData.append('registro.correcto', correcto);
        formData.append('registro.tiempo', tiempo);

        // IMPRIMRI FORM DATA
        for (var pair of formData.entries()) {
            console.log(pair[0] + ', ' + pair[1]);
        }

        axios.post(`${URL[ENTORNO]}` +'chatbot/enviarRegistro',
            formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
            .then(response => console.log('respondiendo correctamente..'))
            .catch(error => console.error("ocurrio un error al enviar el registro.."));
    });

    dfMessenger.addEventListener('df-request-sent', function (event) {
        toinit = new Date().getTime();
    });

})

