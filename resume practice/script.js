const tagInputField = document.querySelector('.tag-input-field');
const tagsContainer = document.querySelector('.tags');

tagInputField.addEventListener('keydown', function(event) {
    if (event.key === 'Enter' && tagInputField.value.trim() !== '') {
        const tagText = tagInputField.value.trim();
        const tagElement = document.createElement('div');
        tagElement.classList.add('tag');
        tagElement.innerHTML = `
            <span class="tag-text">${tagText}</span>
            <span class="tag-remove">x</span>
        `;
        tagsContainer.appendChild(tagElement);
        tagInputField.value = '';
    }
});

tagsContainer.addEventListener('click', function(event) {
    if (event.target.classList.contains('tag-remove')) {
        event.target.parentElement.remove();
    }
});

const tagInputField1 = document.querySelector('.tag-input-field1');
const tagsContainer2 = document.querySelector('.lag');

tagInputField1.addEventListener('keydown', function(event1) {
    if (event.key === 'Enter' && tagInputField1.value.trim() !== '') {
        const tagText = tagInputField1.value.trim();
        const tagElement = document.createElement('div');
        tagElement.classList.add('tag');
        tagElement.innerHTML = `
            <span class="tag-text">${tagText}</span>
            <span class="tag-remove">x</span>
        `;
        tagsContainer2.appendChild(tagElement);
        tagInputField1.value = '';
    }
});

tagsContainer2.addEventListener('click', function(event1) {
    if (event1.target.classList.contains('tag-remove')) {
        event1.target.parentElement.remove();
    }
});

