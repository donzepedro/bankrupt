  let element = document.getElementById('send')
        element.addEventListener('click', (e)=>{
            let phone = document.getElementById('data').value
            if(phone) {
                    //send a call to coMagick
                    Comagic.sitePhoneCall({phone: phone}, function (resp) {
                        console.log(resp)
                    });
                }
            })

