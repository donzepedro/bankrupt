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
        var __cs = __cs || [];
        __cs.push(["setCsAccount", "DevVt12iFkvcgE3V9WI1kf3tho9rU_FK"]);