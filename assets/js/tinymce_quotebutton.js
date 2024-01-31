(function() {
  tinymce.create('tinymce.plugins.original_tinymce_button', {
    init: function(ed, url) {
      ed.addButton('insert_template', {
        // text : ボタンの表示名
        text: 'テンプレートの挿入',
        // type: 'menubutton'にすると、プルダウンのようなメニューボタンを作成することができます。
        type: 'menubutton',
        menu: [
          {
            text: 'お問い合わせボタン',
            onclick: function() {
              ed.insertContent(`
              [myphp file="contact_btn"]
                `
              );
            }
          },
          {
            text: '資料ダウンロードボタン',
            onclick: function() {
              ed.insertContent(`
              [myphp file="download_btn"]
                `
              );
            }
          },
          {
            text: "記事内リンク",
            onclick: function() {
              ed.insertContent('[sc_Linkcard url="ここにURL入れてください"]');
            }
          }
        ]
      });
    },
    createControl : function(n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('original_tinymce_button_plugin', tinymce.plugins.original_tinymce_button);
})();
