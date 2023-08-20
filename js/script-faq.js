'use strict';

const removeClass = (list) => {
	list.forEach(elem => {		
		elem.classList.remove('current');
	});
};

const openList = (list1, list2) => {
	const topicItem = document.querySelectorAll(list1);
	const topicList = document.querySelectorAll(list2);	
	
	topicItem.forEach(elem => {
		
		elem.addEventListener('click', () => {
			removeClass(topicItem);
			elem.classList.toggle('current');	
			
			let atr = elem.getAttribute('data-target');

			for (let i = 0; i < topicList.length; i++) {				
				if (topicList[i].classList.contains(atr)) {
					// console.log('atr', atr);					
					
					topicList[i].classList.add('visible');
					
				} else {					
					topicList[i].classList.remove('visible');
				}
			}
			
		});
	});
};

openList('.topic__item','.topic-list');
openList('.questions__item', '.answers__answer');