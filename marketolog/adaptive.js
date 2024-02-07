
document.addEventListener('DOMContentLoaded',()=>{
    let counterShow1=0;
    document.querySelectorAll('#read_next_1').forEach((btnNext)=>{
        btnNext.addEventListener('click',()=>{
            $('#authors-list1 > .comics_hide').first().show().removeClass('comics_hide');
            counterShow1++
            console.log(counterShow2)
            if (counterShow1 >= 3) {
                $('#read_next_1').hide()
            }
        })
    })
    let counterShow2=0;
    document.querySelectorAll('#read_next_2').forEach((btnNext)=>{
        btnNext.addEventListener('click',()=>{
            $('#authors-list2 > .comics_hide').first().show().removeClass('comics_hide');
            counterShow2++
            console.log(counterShow2)
            if (counterShow2 >= 3) {
                $('#read_next_2').hide()
            }
        })
    })
})
