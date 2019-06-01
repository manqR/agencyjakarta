<?php

    function NamaBulan($tgl){
        $valTgl = date('d M Y H:i:s',strtotime($tgl));
        return $valTgl;
    }

    function TableClientDetail($value = array()){
        
        // $category = $value['case_category'] == '' ? '-' : $value['case_category'];
        
        
        $table = '<div class="table-responsive">
                    <table>
                        <tbody>
                            <tr valign="top">
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Name</b>
                                </td>
                                <td colspan="5" >'.$value[1]->name.'
                                </td>
                            </tr>
                            <tr valign="top">
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Address</b>
                                </td>
                                <td><span>'.$value[1]->address.'</span></td>
                            </tr>

                            <tr valign="top">
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Company Name</b>
                                </td>
                                <td><span>'.$value[1]->company_name.'</span></td>

                                
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Email</b>
                                </td>
                                <td><span>'.$value[1]->email.'</span></td>        
                                
                            </tr>

                            <tr valign="top">
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Phone Number</b>
                                </td>
                                <td><span>'.$value[1]->phone_number.'</span></td>

                                <td class="left" bgcolor="#EEEEEE">
                                    <b>City</b>
                                </td>
                                <td><span>'.$value[1]->city.'</span></td>
                                            
                            </tr>
                            <tr valign="top">
                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Contract Number</b>
                                </td>
                                <td><span>'.$value[0]->contract_id.'</span></td>

                                <td class="left" bgcolor="#EEEEEE">
                                    <b>Billing</b>
                                </td>
                                <td><span>'.FormatRupiah($value[0]->cost).'</span></td>
                                            
                            </tr>
                        </tbody>
                    </table>
                </div>';
        echo  $table;

    }    
?>