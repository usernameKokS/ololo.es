<div id="newuser_pushcorner"></div>
<style>
    #newuser_pushcorner
    {
        position: fixed;
        top: -100px;
        right: 5px;
        padding: 10px 15px;
        background: #2cbd65;
        color: #fff;
        border-radius: 10px;
        opacity: 0;
        max-width: 320px;
        z-index:2147483650;
    }

    #newuser_pushcorner.fadein
    {
        -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;

        opacity: .85; 
        top: 5px;
    }

    @keyframes fadein {
        from { opacity: 0; top: -100px;}
        to   { opacity: .85; top: 5px;}
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from { opacity: 0; top: -100px;}
        to   { opacity: .85; top: 5px;}
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from { opacity: 0; top: -100px;}
        to   { opacity: .85; top: 5px;}
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
        from { opacity: 0; top: -100px;}
        to   { opacity: .85; top: 5px;}
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from { opacity: 0; top: -100px;}
        to   { opacity: .85; top: 5px;}
    }

    #newuser_pushcorner.fadeout
    {
        -webkit-animation: fadeout 2s; /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadeout 2s; /* Firefox < 16 */
        -ms-animation: fadeout 2s; /* Internet Explorer */
         -o-animation: fadeout 2s; /* Opera < 12.1 */
            animation: fadeout 2s;
    }

    @keyframes fadeout {
        from { opacity: .85; top: 5px; }
        to   { opacity: 0; top: -100px; }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadeout {
        from { opacity: .85; top: 5px; }
        to   { opacity: 0; top: -100px; }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadeout {
        from { opacity: .85; top: 5px; }
        to   { opacity: 0; top: -100px; }
    }

    /* Internet Explorer */
    @-ms-keyframes fadeout {
        from { opacity: .85; top: 5px; }
        to   { opacity: 0; top: -100px; }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadeout {
        from { opacity: .85; top: 5px; }
        to   { opacity: 0; top: -100px; }
    }
</style>
<script>
    getRandomTime = () => {
        const time = Math.random() * (60000 - 20000) + 20000
        // const time = Math.random() * (5000 - 2000) + 2000
        
        return time
    }

    const newUserPushCornerBlock = document.getElementById('newuser_pushcorner');

    const messages = [
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Silver</b>',
            'bgcolor': '#868586',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Silver</b>',
            'bgcolor': '#868586',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Gold</b>',
            'bgcolor': '#E4AC65',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Silver</b>',
            'bgcolor': '#868586',
            'color': '#ffffff'
        },
        {
            'text': 'Nuevo usuario acaba de comprar una tarifa <b>Diamond</b>',
            'bgcolor': '#2cbd65',
            'color': '#ffffff'
        },
    ];
    let messageCount = 0;

    showNewUserPushCorner = () => {
        setTimeout(() => {
            newUserPushCornerBlock.innerHTML = messages[messageCount].text;
            newUserPushCornerBlock.style.backgroundColor = messages[messageCount].bgcolor;
            newUserPushCornerBlock.style.color = messages[messageCount].color;

            newUserPushCornerBlock.classList.remove('fadeout');
            newUserPushCornerBlock.classList.add('fadein');
            setTimeout(() => {
                newUserPushCornerBlock.classList.remove('fadein');
                newUserPushCornerBlock.classList.add('fadeout');

                if(messageCount == 9)
                    messageCount = 0;
                else
                    messageCount++;

                showNewUserPushCorner();
            }, 4000);
        }, getRandomTime());
    }

    showNewUserPushCorner();
    
</script>