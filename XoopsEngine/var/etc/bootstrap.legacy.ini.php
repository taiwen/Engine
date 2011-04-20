;<?php __halt_compiler();

[production]
; php settings
;phpSettings.display_startup_errors = 0
;phpSettings.display_errors = 0
phpSettings.date.timezone = "UTC"

; Resources

; security
resources.security.config = "security"

; user
resources.user = true

; front controller
; Do not change defaultModule, otherwise basic service won't work
resources.frontController.throwExceptions = false
resources.frontController.defaultModule = "default"
resources.frontController.defaultControllerName = "index"
resources.frontController.defaultAction = "index"
resources.frontController.section = "front"
;resources.frontController.noViewRenderer = true
resources.frontController.noErrorHandler = true

; router
resources.router.route = "raw"

; cache
resources.cache = true

; legacy
resources.legacy = true

; database
resources.db.config = "db"
resources.db.profiler.enabled = false

; config
resources.config = true

; module
resources.module = true

; session
resources.session.config = "session"

; authorization
resources.auth.adapter = "legacy"
resources.auth.storage = "session"
; days
resources.auth.rememberMe = 14

; Translate
; system translate adapter
resources.translate.adapter = legacy
; system translate preload data
resources.translate.load.global = true
; module translate preload data
resources.translate.module.data = main

; view
resources.view.class = Legacy_Zend_View
; layout
resources.view.layout.class = Legacy_Zend_Layout
resources.view.layout.theme = legacy
resources.view.layout.navigation = front
resources.view.layout.plugin.register = true
resources.view.layout.cache.frontend = core
resources.view.layout.cache.backend = file
; template
resources.view.template.caching = true
resources.view.template.compile_check = false
resources.view.template.debugging = false
resources.view.template.force_compile = false
resources.view.template.error_unassigned = false
; renderer
resources.view.viewRenderer.class = Legacy_Zend_Controller_Action_Helper_ViewRenderer

[staging : production]

[development : production]
;phpSettings.display_startup_errors = 1
;phpSettings.display_errors = 1
resources.db.profiler.enabled = true

[debug : production]
;phpSettings.display_startup_errors = 1
;phpSettings.display_errors = 1
resources.db.profiler.enabled = true
