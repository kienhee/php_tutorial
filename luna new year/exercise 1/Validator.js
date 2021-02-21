//ham validator
function Validator(options){
    var formElement = document.querySelector(options.form);
    
    if(formElement){
        options.rules.forEach(function (rule){
           var inputElement = formElement. querySelector(rule.selector)
           if (inputElement){
               inputElement.onblur = function(){
                   console.log(inputElement.value);
               }
           }
        })
    }
    
}
//định nghĩa rules
Validator.isRequired = function (selector){
    return {
        selector: selector,
        test: function(){

        }
    }
}
