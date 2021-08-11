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
        __cs.push(["setCsAccount", "lsXO2oepSa1US6eVHpwdBPqZANIP_mof"]);