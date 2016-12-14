define({ "api": [
  {
    "type": "GET",
    "url": "/admin/issue/delete",
    "title": "对某个问题强制删除",
    "group": "Admin",
    "description": "<p>对某个问题强制删除</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "issue_id",
            "description": "<p>问题对应的id</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssueDelete",
    "sampleRequest": [
      {
<<<<<<< HEAD
        "url": "http://api.consult.coder4me.cn/admin/issue/delete/:issue_id"
=======
        "url": "http://api.consult.dev/admin/issue/delete"
>>>>>>> 22d50bc2b99a95794d135481bc0a6ea9206fee0c
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/issue/list_softdel",
    "title": "分页显示被软删除的问题",
    "group": "Admin",
    "description": "<p>分页显示被软删除的问题</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "offset",
            "defaultValue": "0",
            "description": "<p>偏移量</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "5",
            "description": "<p>每页显示的个数</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssueList_softdel",
    "sampleRequest": [
      {
<<<<<<< HEAD
        "url": "http://api.consult.coder4me.cn/admin/issue/list_softdel/:offset/:limit"
=======
        "url": "http://api.consult.dev/admin/issue/list_softdel"
>>>>>>> 22d50bc2b99a95794d135481bc0a6ea9206fee0c
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/issue/lists",
    "title": "获取所有没有被软删除的问题",
    "group": "Admin",
    "description": "<p>获取所有的问题以及问题的详细信息</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "offset",
            "defaultValue": "0",
            "description": "<p>偏移量</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "5",
            "description": "<p>每页显示的个数</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssueLists",
    "sampleRequest": [
      {
<<<<<<< HEAD
        "url": "http://api.consult.coder4me.cn/admin/issue/lists/offset=:offset/limit=:limit"
=======
        "url": "http://api.consult.dev/admin/issue/lists"
>>>>>>> 22d50bc2b99a95794d135481bc0a6ea9206fee0c
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/issue/restore",
    "title": "恢复被软删除的问题",
    "group": "Admin",
    "description": "<p>恢复被软删除的问题</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "issue_id",
            "description": "<p>问题的id</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssueRestore",
    "sampleRequest": [
      {
<<<<<<< HEAD
        "url": "http://api.consult.coder4me.cn/admin/issue/restore/:issue_id"
=======
        "url": "http://api.consult.dev/admin/issue/restore"
>>>>>>> 22d50bc2b99a95794d135481bc0a6ea9206fee0c
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/issue/softdelete",
    "title": "对某个问题软删除",
    "group": "Admin",
    "description": "<p>对某个问题软删除</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "issue_id",
            "description": "<p>问题对应的id</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssueSoftdelete",
    "sampleRequest": [
      {
<<<<<<< HEAD
        "url": "http://api.consult.coder4me.cn/admin/issue/softdelete/:issue_id"
=======
        "url": "http://api.consult.dev/admin/issue/softdelete"
>>>>>>> 22d50bc2b99a95794d135481bc0a6ea9206fee0c
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/issues/count",
    "title": "获取所有没有被软删除的问题的总数",
    "group": "Admin",
    "description": "<p>获取所有没有被软删除的问题的总数</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminIssuesCount",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/issues/count"
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/me",
    "title": "获取管理员信息",
    "group": "Admin",
    "description": "<p>获取管理员信息</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminMe",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/me"
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/refresh_token",
    "title": "刷新token",
    "group": "Admin",
    "description": "<p>刷新token接口</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>旧的token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminRefresh_token",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/refresh_token"
      }
    ]
  },
  {
    "type": "GET",
    "url": "/admin/soft_issues/softdelete_count",
    "title": "回收站中问题的总数",
    "group": "Admin",
    "description": "<p>回收站中问题的总数</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "GetAdminSoft_issuesSoftdelete_count",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/soft_issues/softdelete_count"
      }
    ]
  },
  {
    "type": "POST",
    "url": "/admin/comment/store",
    "title": "回复某个问题",
    "group": "Admin",
    "description": "<p>通过issue_id回复某个问题</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>token</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "issue_id",
            "description": "<p>问题对应的id</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "answer",
            "description": "<p>回复的详情</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "PostAdminCommentStore",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/comment/store"
      }
    ]
  },
  {
    "type": "POST",
    "url": "/admin/create",
    "title": "管理员注册",
    "group": "Admin",
    "description": "<p>管理员注册接口</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>用户名</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>密码</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>邮箱</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "PostAdminCreate",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/create"
      }
    ]
  },
  {
    "type": "POST",
    "url": "/admin/login",
    "title": "管理员登录",
    "group": "Admin",
    "description": "<p>管理员登录接口</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>用户名</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>密码</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "Admin",
    "name": "PostAdminLogin",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/admin/login"
      }
    ]
  },
  {
    "type": "GET",
    "url": "/issue/show/:offset/:limit",
    "title": "显示已回复的问题",
    "group": "issue",
    "description": "<p>显示所有管理员已回复的问题</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "offset",
            "defaultValue": "0",
            "description": "<p>偏移量</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "5",
            "description": "<p>显示的个数</p>"
          }
        ]
      }
    },
    "version": "0.0.3",
    "filename": "routes/api.php",
    "groupTitle": "issue",
    "name": "GetIssueShowOffsetLimit",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/issue/show/:offset/:limit"
      }
    ]
  },
  {
    "type": "POST",
    "url": "/issue/store",
    "title": "提交问题",
    "group": "issue",
    "description": "<p>考生提交问题(可以匿名提问)</p>",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": "<p>标题</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": "<p>问题的详细描述</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "wx_user_id",
            "description": "<p>用户id(存储在localStore中,没有则跳转到填写信息页面,如果用户选择跳过则表示匿名提问)</p>"
          }
        ]
      }
    },
    "filename": "routes/api.php",
    "groupTitle": "issue",
    "name": "PostIssueStore",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/issue/store"
      }
    ]
  },
  {
    "type": "GET",
    "url": "/wx_user/linkage/:parent_id",
    "title": "省市三级联动",
    "group": "user",
    "description": "<p>获取省市三级联动</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parent_id",
            "defaultValue": "0",
            "description": "<p>父级城市ID</p>"
          }
        ]
      }
    },
    "version": "0.0.1",
    "filename": "routes/api.php",
    "groupTitle": "user",
    "name": "GetWx_userLinkageParent_id",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/wx_user/linkage/:parent_id"
      }
    ]
  },
  {
    "type": "POST",
    "url": "/wx_user/store",
    "title": "保存用户信息",
    "group": "user",
    "description": "<p>如localStore中没有用户信息则让用户填写相关信息并保存到数据库中.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>用户姓名</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>用户的email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": "<p>联系方式</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "province",
            "description": "<p>省份</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "city",
            "description": "<p>城市</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "area",
            "description": "<p>地区</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "course",
            "description": "<p>成绩</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "old_school",
            "description": "<p>所在学校</p>"
          }
        ]
      }
    },
    "version": "1.1.0",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "{\n    \"message\": \"数据验证失败.\",\n    \"status_code\": 500\n}",
          "type": "json"
        }
      ]
    },
    "filename": "routes/api.php",
    "groupTitle": "user",
    "name": "PostWx_userStore",
    "sampleRequest": [
      {
        "url": "http://api.consult.coder4me.cn/wx_user/store"
      }
    ]
  }
] });
