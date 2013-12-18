function validerQuestionnaire(idDiv) {
        var idQuestion = $('#' + idDiv + ' input[name="questionId"]').val();
        var idChoix = $('#' + idDiv + ' :input[name="choix"]:checked').val();
        var both = [idQuestion, idChoix];
        $.ajax({
            type: "post",
            url: ("?c=main&a=sessionQuestion"),
            data: {element: both},
            success: function() {
                
            }
        });
}

