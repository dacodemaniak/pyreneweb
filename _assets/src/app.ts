import * as $ from 'jquery';
import 'jqueryui';
import './Modules/jquery-ext';
//import './Modules/jquery-ui-ext';

import { Customer } from './Components/Customer/customer';

window.onload = () => {
    console.log('Coucou app.ts');
    
    let customer = new Customer();
}