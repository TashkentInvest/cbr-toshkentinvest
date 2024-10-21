(function () {
    $.widget('ui.autocomplete', $.ui.autocomplete, {
        options: {
            messages: {
                noResults: 'РќРёС‡РµРіРѕ РЅРµ РЅР°Р№РґРµРЅРѕ.',
                results: function (amount) {
                    var s = app.declOfNum(amount, ['РќР°Р№РґРµРЅР° $count$ Р·Р°РїРёСЃСЊ', 'РќР°Р№РґРµРЅРѕ $count$ Р·Р°РїРёСЃРё', 'РќР°Р№РґРµРЅРѕ $count$ Р·Р°РїРёСЃРµР№']);
                    s = s.replace('$count$', amount);
                    return s + '. РСЃРїРѕР»СЊР·СѓР№С‚Рµ РєР»Р°РІРёС€Рё РІРІРµСЂС… Рё РІРЅРёР· РґР»СЏ РІС‹Р±РѕСЂР°.';
                }
            }
        }
    });
})();