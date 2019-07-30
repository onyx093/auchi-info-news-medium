/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

import {MDCMenu} from "@material/menu";
// import {MDCMenuSurface} from '@material/menu-surface';
import {MDCTabBar} from '@material/tab-bar';
import {MDCTab} from '@material/tab';
import {MDCTextField} from '@material/textfield';
import {MDCFormField} from '@material/form-field';
import {MDCCheckbox} from '@material/checkbox';
import {MDCTextFieldHelperText} from '@material/textfield/helper-text';
import {MDCSelect} from '@material/select';
import {MDCChipSet} from '@material/chips';
import Axios from "axios";

$(document).ready(function(){

    $(".user-account a").on("click", function(event){
        event.preventDefault();
        const menu = new MDCMenu(document.querySelector('.mdc-menu-surface'));
        menu.open = true;
        menu.setFixedPosition(true);
    });

    $(".logout").click(function(e){
        e.preventDefault();
        $('#logout-form').submit();
    });

    const textField = [].map.call(document.querySelectorAll('.mdc-text-field'), function(el){
        return new MDCTextField(el);
    });

    const textFieldHelperText = [].map.call(document.querySelectorAll('.mdc-text-field-helper-text'), function(el){
        return new MDCTextFieldHelperText(el);
    });

    const checkbox = new MDCCheckbox(document.querySelector('.mdc-checkbox'));
    const formField = new MDCFormField(document.querySelector('.mdc-form-field'));
    formField.input = checkbox;

    const chipSet = [].map.call(document.querySelectorAll('.mdc-chip-set'), function(el){
        return new MDCChipSet(el);
    });

    


});

$(document).on('change','.states',function(){
    var state = $(this).val();
    axios.get('http://127.0.0.1/admin/lga/' + state).then(
        response => {
            array.forEach(element => {
                
            });
        });

});

/* (function(){
    
}());
 */