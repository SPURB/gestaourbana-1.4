/**
 * Created by Lucas Pimenta on 02/02/2017.
 */

    jQuery(function(){
        var elementsMap = [
                            {"element":"cep","mask":"99999-999"},
                            {"element":"cpf","mask":"999.999.999-99"},
                            {"element":"cnpj","mask":"99.999.999/9999-99"}
                        ];
        jQuery.each(elementsMap, function (i,e) {
            if(jQuery("body").find('#'+e.element).length > 0)
                VMasker(document.getElementById(e.element)).maskPattern(e.mask);
        });
    });