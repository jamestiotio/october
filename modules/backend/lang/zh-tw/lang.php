<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => '錯誤的字串類型 :type',
    'options_method_not_exists' => '模型 :model 必須定義一個返回 \':field\' 表單字串選項的方法 :method()。',
  ],
  'widget' => [
    'not_registered' => '元件 \':name\' 還沒註冊',
    'not_bound' => '元件 \':name\' 沒綁到控制器',
  ],
  'page' => [
    'untitled' => '未命名',
    'access_denied' => [
      'label' => '拒絕訪問',
      'help' => '您沒有訪問這個頁面需要的權限.',
      'cms_link' => '返回管理介面',
    ],
  ],
  'partial' => [
    'not_found_name' => '元件 \':name\' 找不到.',
  ],
  'account' => [
    'sign_out' => '登出',
    'login_placeholder' => '登入',
    'password_placeholder' => '密碼',
    'enter_email' => '輸入您的email',
    'email_placeholder' => 'email',
    'apply' => '套用',
    'cancel' => '取消',
    'delete' => '刪除',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => '儀表板',
    'widget_inspector_title' => '元件設定',
    'widget_inspector_description' => '設定報表元件',
    'widget_columns_label' => '寬度 :columns',
    'widget_columns_description' => '元件寬度, 1 到 10',
    'widget_columns_error' => '請輸入元件寬度, 1 到 10',
    'columns' => '{1} 欄|[2,Inf] 欄',
    'widget_new_row_label' => '強制新列',
    'widget_new_row_description' => '把元件放到新列',
    'widget_title_label' => '元件標題',
    'widget_title_error' => '需要元件標題',
    'reset_layout_success' => '版面已重置。',
    'make_default_success' => '已設定此版面為預設。',
    'status' => [
      'widget_title_default' => '系統狀態',
      'update_available' => '{0} 更新可用!|{1} 更新可用!|[2,Inf] 更新可用!',
    ],
  ],
  'user' => [
    'name' => '管理員',
    'list_title' => '管理',
    'new' => '新管理員',
    'first_name' => '名',
    'last_name' => '姓',
    'full_name' => '全名',
    'email' => '郵件',
    'groups' => '團隊',
    'groups_comment' => '指定這個人屬於哪個群組',
    'avatar' => '頭像',
    'password' => '密碼',
    'password_confirmation' => '確認密碼',
    'permissions' => '權限',
    'account' => '帳號',
    'superuser' => '超級使用者',
    'superuser_comment' => '選取並允許這個人訪問全部區域',
    'send_invite' => '發送邀請郵件',
    'send_invite_comment' => '發送一封包含使用者名和密碼的歡迎郵件',
    'delete_confirm' => '您真的想要刪除這個管理員?',
    'return' => '返回管理員列表',
    'allow' => '允許',
    'inherit' => '繼承',
    'deny' => '拒絕',
    'group' => [
      'name' => '群組',
      'name_field' => '名字',
      'description_field' => '描述',
      'is_new_user_default_field' => '預設增加新管理員到這個群組',
      'code_field' => '代碼',
      'code_comment' => '如果您想訪問 API, 請輸入唯一碼',
      'list_title' => '管理群組',
      'new' => '新管理群組',
      'delete_confirm' => '您真的想要刪除這個管理群組?',
      'return' => '返回群組列表',
    ],
    'preferences' => [
      'not_authenticated' => '沒有認證使用者載入或儲存設定',
    ],
  ],
  'list' => [
    'default_title' => '列表',
    'search_prompt' => '搜尋...',
    'no_records' => '目前頁面中沒有記錄',
    'missing_model' => ':class 中的列表沒有定義好的模型。',
    'missing_column' => '沒有 :columns 的欄定義',
    'missing_columns' => ':class 中使用的列表沒有定義好的欄',
    'missing_definition' => '列表不包含 \':field\' 欄.',
    'behavior_not_ready' => '列表沒有初始化, 確認您的控制器中調用了makeLists()',
    'invalid_column_datetime' => '欄值 \':column\' 不是時間對象, 缺少了 $dates 在模型中的引用嗎?',
    'pagination' => '顯示記錄: :from-:to :total',
    'prev_page' => '之前頁',
    'next_page' => '下一頁',
    'loading' => '載入中...',
    'delete_selected' => '刪除選擇的',
    'delete_selected_empty' => '沒有需要刪除的記錄',
    'delete_selected_confirm' => '刪除選取的記錄?',
    'delete_selected_success' => '成功刪除選擇的記錄',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => '新 :name',
    'update_title' => '編輯 :name',
    'preview_title' => '預覽 :name',
    'missing_id' => '表單記錄ID沒有指定',
    'missing_model' => ':class 中使用的表單沒有定義的model',
    'missing_definition' => '表單不包含字串 \':field\'.',
    'action_confirm' => '您確定?',
    'create' => '建立',
    'create_and_close' => '建立和關閉',
    'creating' => '建立中...',
    'creating_name' => '建立 :name...',
    'save' => '儲存',
    'save_and_close' => '儲存和關閉',
    'saving' => '儲存...',
    'saving_name' => '儲存 :name...',
    'delete' => '刪除',
    'deleting' => '刪除中...',
    'deleting_name' => '刪除 :name...',
    'reset_default' => '重置到預設',
    'resetting' => '重置',
    'resetting_name' => '重置 :name',
    'undefined_tab' => '雜項',
    'field_off' => '關',
    'field_on' => '開',
    'add' => '增加',
    'apply' => '確定',
    'cancel' => '取消',
    'close' => '關閉',
    'confirm' => '確認',
    'reload' => '重新載入',
    'ok' => 'OK',
    'or' => '或',
    'confirm_tab_close' => '您真的想要關閉這個標籤嗎? 未儲存的改變會丟失',
    'behavior_not_ready' => '表單還沒初始化, 確保您調用了控制器中的 initForm()',
    'preview_no_files_message' => '檔案沒有上傳',
    'select' => '選擇',
    'select_all' => '全選',
    'select_none' => '選擇無',
    'insert_row' => '插入行',
    'delete_row' => '刪除行',
    'concurrency_file_changed_title' => '檔案異動',
    'concurrency_file_changed_description' => '您正在編輯的檔案正在被其他使用者修改. 您可以重新載入或覆蓋硬碟上的檔案.',
  ],
  'relation' => [
    'missing_config' => '關聯沒有\':config\'的設定檔案.',
    'missing_definition' => '關聯不包含 \':field\' 的定義.',
    'missing_model' => '用於 :class 的關聯沒有定義好的model.',
    'invalid_action_single' => '這個操作不能在單一關聯上執行.',
    'invalid_action_multi' => '這個操作不能在多重關聯上執行.',
    'help' => '點選增加',
    'add' => '增加',
    'add_selected' => '增加選取的',
    'link_selected' => '關聯選取',
    'cancel' => '取消',
    'close' => '關閉',
    'create' => '建立',
    'update' => '更新',
    'preview' => '預覽',
    'remove_name' => '移除 :name',
    'delete_name' => '刪除 :name',
    'link' => '關聯',
    'unlink_name' => '取消關聯 :name',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' ID :id 找不到',
    'missing_id' => '沒有指定的ID搜尋model記錄',
    'missing_relation' => 'Model \':class\' 不包含 \':relation\'.',
    'missing_method' => 'Model \':class\' 不包含 \':method\'.',
    'invalid_class' => 'Model :model 在 :class 中是錯誤的, 必須繼承 \\Model class.',
    'mass_assignment_failed' => '針對Model屬性\':attribute\'的大量賦值失敗.',
  ],
  'warnings' => [
    'tips' => '系統設定技巧',
    'tips_description' => '您需要注意那些issue, 以使系統設定正確',
    'permissions' => '目錄 :name 或子目錄對PHP不可寫. 請對這個目錄上的webserver設定正確的權限',
    'extension' => 'PHP外掛 :name 沒安裝. 請安裝這個庫並且啟用外掛',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => '我的設定',
    'menu_description' => '設定涉及到您的管理帳號',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Accent color',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => '全部',
    'date_all' => '全部區間',
    'number_all' => '全部數目',
  ],
  'permissions' => [
    'manage_media' => 'Create new media items - images, videos, sounds, documents',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'default_prompt' => 'Click the %s button to find a media item',
  ],
  'media' => [
    'menu_label' => '媒體',
    'upload' => '上傳',
    'move' => '移動',
    'delete' => '刪除',
    'add_folder' => '增加檔案夾',
    'search' => '搜尋',
    'display' => '顯示',
    'filter_everything' => '所有',
    'filter_images' => '圖片',
    'filter_video' => '影片',
    'filter_audio' => '音訊',
    'filter_documents' => '文檔',
    'library' => '媒體庫',
    'size' => '大小',
    'title' => '標題',
    'last_modified' => '最近修改',
    'public_url' => '公開URL',
    'click_here' => '點選這裡',
    'thumbnail_error' => '生產縮略圖錯誤.',
    'return_to_parent' => '返回上層檔案夾',
    'return_to_parent_label' => '返回 ..',
    'nothing_selected' => '沒有選中.',
    'multiple_selected' => '多選.',
    'uploading_file_num' => '上傳 :number 檔案...',
    'uploading_complete' => '上傳完畢',
    'order_by' => '排列方式',
    'folder' => '檔案夾',
    'no_files_found' => '沒找到您請求的檔案.',
    'delete_empty' => '請選擇刪除項.',
    'delete_confirm' => '您是否想要刪除選中項?',
    'error_renaming_file' => '重命名錯誤.',
    'new_folder_title' => '新檔案',
    'folder_name' => '檔案夾名',
    'error_creating_folder' => '新建檔案夾錯誤',
    'folder_or_file_exist' => '檔案夾或檔案已經存在.',
    'move_empty' => '請選擇移動項.',
    'move_popup_title' => '移動檔案或檔案夾',
    'move_destination' => '目標檔案夾',
    'please_select_move_dest' => '請選擇目標檔案夾.',
    'move_dest_src_match' => '請選擇另一個目標檔案夾.',
    'empty_library' => '媒體庫是空的. 從上傳檔案或建立檔案夾開始.',
    'insert' => '插入',
    'crop_and_insert' => '裁剪並插入',
    'select_single_image' => '請選擇一張圖片.',
    'selection_not_image' => '選擇的不是一張圖片.',
    'restore' => '取消所有更改',
    'resize' => '調整大小...',
    'selection_mode_normal' => '正常',
    'selection_mode_fixed_ratio' => '固定比例',
    'selection_mode_fixed_size' => '固定大小',
    'height' => '高度',
    'width' => '寬度',
    'selection_mode' => '選擇模式',
    'resize_image' => '調整圖片',
    'image_size' => '圖片大小:',
    'selected_size' => '選中:',
    'direction' => '順序',
    'direction_asc' => '升冪',
    'direction_desc' => '降冪',
  ],
];
