        const lightbox = document.createElement('div')
        lightbox.id = 'lightbox'
        document.body.appenChild(lightbox)

        const images = document.querySelector('#MainImg')
        images.forEach(image => {
            images.addEvenListener('click', e =>{
                lightbox.classList.add('active')
                const img = document.createElement('img')
                img.src = image.src
                while (lightbox.firstChild) {
                    lightbox.removeChild(lightbox.firstChild)
                }
                lightbox.appenChild(img)
            })
        })

        lightbox.addEventListener('click', e =>{
            if(e.target !== e.currentTarget)return
            lightbox.classList.remove('active')
        })
