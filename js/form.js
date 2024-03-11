const radioBtns = document.querySelectorAll('input[type="radio"]');
const addBtn = document.querySelector('form .add');



let index = 1;
if (radioBtns && addBtn) {

    // Loop On Radio  BTns
    radioBtns.forEach(radio => {
        radio.addEventListener('input' , () => {
            if (radio.value == 'نعم') {
                document.querySelector('form .add').classList.add('active');
                createWorkInputs(index)
            } else {
                document.querySelector('form .add').classList.remove('active');
            }
        })
    })

    // Click On Add Btn
    addBtn.addEventListener('click',() =>  {
        if (document.forms[0].checkValidity()) {
            createWorkInputs(index);
        }
    })

}

// Create Work Input 
function createWorkInputs(i) {

    // Create First input Div
    const inputDiv = document.createElement('div');
    inputDiv.className = 'input work';

    // Create Compnay name Label
    const companyNameLabel = document.createElement('label');
    companyNameLabel.setAttribute('for','company-name');
    companyNameLabel.textContent = 'اسم الشركة';
    inputDiv.appendChild(companyNameLabel);

    // Create Compnay Name Input
    const companyName = document.createElement('input');
    companyName.placeholder = "الرجاء تعبئة البيانات";
    companyName.name = 'company-name-' + i;
    companyName.id = 'company-name';
    companyName.required = true;
    inputDiv.appendChild(companyName);

    
    // Work Name

    // Create First input Div
    const secInputDiv = document.createElement('div');
    secInputDiv.className = 'input work';

    // Create Compnay name Label
    const workNameLabel = document.createElement('label');
    workNameLabel.setAttribute('for','work-name');
    workNameLabel.textContent = 'المسمي الوظيفي';
    secInputDiv.appendChild(workNameLabel);

    // Create Compnay Name Input
    const workName = document.createElement('input');
    workName.placeholder = "الرجاء تعبئة البيانات";
    workName.name = 'work-name-' + i;
    workName.id = 'work-name';
    workName.required = true;
    secInputDiv.appendChild(workName);

    // From Date

    // Create First input Div
    const thirdInputDiv = document.createElement('div');
    thirdInputDiv.className = 'input work';

    // Create Compnay name Label
    const workFromLabel = document.createElement('label');
    workFromLabel.setAttribute('for','work-from-date');
    workFromLabel.textContent = 'من تاريخ';
    thirdInputDiv.appendChild(workFromLabel);

    // Create Compnay Name Input
    const workFrom = document.createElement('input');
    workFrom.type = "date";
    workFrom.name = 'work-from-' + i;
    workFrom.id = 'work-from';
    workFrom.required = true;
    thirdInputDiv.appendChild(workFrom);


    // To Date

    // Create First input Div
    const fourthInputDiv = document.createElement('div');
    fourthInputDiv.className = 'input work';

    // Create Compnay name Label
    const workToLabel = document.createElement('label');
    workToLabel.setAttribute('for','work-to-date');
    workToLabel.textContent = 'إلي تاريخ';
    fourthInputDiv.appendChild(workToLabel);

    // Create Compnay Name Input
    const workTo = document.createElement('input');
    workTo.type = "date";
    workTo.name = 'work-to-' + i;
    workTo.id = 'work-to';
    workTo.required = true;
    fourthInputDiv.appendChild(workTo);

    document.querySelector('.works').appendChild(inputDiv);
    document.querySelector('.works').appendChild(secInputDiv);
    document.querySelector('.works').appendChild(thirdInputDiv);
    document.querySelector('.works').appendChild(fourthInputDiv);
    index++
}
