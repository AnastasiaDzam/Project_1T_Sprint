
document.addEventListener('DOMContentLoaded',()=>{
    let counterShow=0;
    document.querySelectorAll('#read_next_1').forEach((btnNext)=>{
        btnNext.addEventListener('click',()=>{
            $('#authors-list1 > .comics_hide').first().show().removeClass('comics_hide');
            counterShow++
            console.log(counterShow)
            if (counterShow >= 3) {
                $('#read_next_1').hide()
            }
        })
    })
})

document.addEventListener('DOMContentLoaded',()=>{
    let counterShow=0;
    document.querySelectorAll('#read_next_2').forEach((btnNext)=>{
        btnNext.addEventListener('click',()=>{
            $('#authors-list2 > .comics_hide').first().show().removeClass('comics_hide');
            counterShow++
            console.log(counterShow)
            if (counterShow >= 3) {
                $('#read_next_2').hide()
            }
        })
    })
})