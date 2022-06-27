const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"login":{"uri":"login","methods":["GET","HEAD"]},"logout":{"uri":"logout","methods":["POST"]},"password.request":{"uri":"forgot-password","methods":["GET","HEAD"]},"password.reset":{"uri":"reset-password\/{token}","methods":["GET","HEAD"]},"password.email":{"uri":"forgot-password","methods":["POST"]},"password.update":{"uri":"reset-password","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"user-profile-information.update":{"uri":"user\/profile-information","methods":["PUT"]},"user-password.update":{"uri":"user\/password","methods":["PUT"]},"password.confirmation":{"uri":"user\/confirmed-password-status","methods":["GET","HEAD"]},"password.confirm":{"uri":"user\/confirm-password","methods":["POST"]},"two-factor.login":{"uri":"two-factor-challenge","methods":["GET","HEAD"]},"two-factor.enable":{"uri":"user\/two-factor-authentication","methods":["POST"]},"two-factor.confirm":{"uri":"user\/confirmed-two-factor-authentication","methods":["POST"]},"two-factor.disable":{"uri":"user\/two-factor-authentication","methods":["DELETE"]},"two-factor.qr-code":{"uri":"user\/two-factor-qr-code","methods":["GET","HEAD"]},"two-factor.secret-key":{"uri":"user\/two-factor-secret-key","methods":["GET","HEAD"]},"two-factor.recovery-codes":{"uri":"user\/two-factor-recovery-codes","methods":["GET","HEAD"]},"profile.show":{"uri":"user\/profile","methods":["GET","HEAD"]},"other-browser-sessions.destroy":{"uri":"user\/other-browser-sessions","methods":["DELETE"]},"current-user-photo.destroy":{"uri":"user\/profile-photo","methods":["DELETE"]},"current-user.destroy":{"uri":"user","methods":["DELETE"]},"api.exams":{"uri":"api\/exams","methods":["GET","HEAD"]},"api.exam":{"uri":"api\/exam","methods":["GET","HEAD"]},"front.index":{"uri":"\/","methods":["GET","HEAD"]},"front.blog":{"uri":"blog","methods":["GET","HEAD"]},"front.post":{"uri":"artigo\/{slug}","methods":["GET","HEAD"]},"dashboard":{"uri":"dashboard","methods":["GET","HEAD"]},"post.index":{"uri":"post","methods":["GET","HEAD"]},"post.create":{"uri":"post\/create","methods":["GET","HEAD"]},"post.store":{"uri":"post","methods":["POST"]},"post.show":{"uri":"post\/{post}","methods":["GET","HEAD"],"bindings":{"post":"id"}},"post.edit":{"uri":"post\/{post}\/edit","methods":["GET","HEAD"],"bindings":{"post":"id"}},"post.update":{"uri":"post\/{post}","methods":["PUT","PATCH"],"bindings":{"post":"id"}},"post.destroy":{"uri":"post\/{post}","methods":["DELETE"],"bindings":{"post":"id"}},"category.index":{"uri":"category","methods":["GET","HEAD"]},"category.create":{"uri":"category\/create","methods":["GET","HEAD"]},"category.store":{"uri":"category","methods":["POST"]},"category.show":{"uri":"category\/{category}","methods":["GET","HEAD"]},"category.edit":{"uri":"category\/{category}\/edit","methods":["GET","HEAD"],"bindings":{"category":"id"}},"category.update":{"uri":"category\/{category}","methods":["PUT","PATCH"],"bindings":{"category":"id"}},"category.destroy":{"uri":"category\/{category}","methods":["DELETE"],"bindings":{"category":"id"}},"diagnostic.index":{"uri":"diagnostic","methods":["GET","HEAD"]},"diagnostic.create":{"uri":"diagnostic\/create","methods":["GET","HEAD"]},"diagnostic.store":{"uri":"diagnostic","methods":["POST"]},"diagnostic.show":{"uri":"diagnostic\/{diagnostic}","methods":["GET","HEAD"]},"diagnostic.edit":{"uri":"diagnostic\/{diagnostic}\/edit","methods":["GET","HEAD"]},"diagnostic.update":{"uri":"diagnostic\/{diagnostic}","methods":["PUT","PATCH"]},"diagnostic.destroy":{"uri":"diagnostic\/{diagnostic}","methods":["DELETE"]},"exams.index":{"uri":"exams","methods":["GET","HEAD"]},"exams.create":{"uri":"exams\/create","methods":["GET","HEAD"]},"exams.store":{"uri":"exams","methods":["POST"]},"exams.show":{"uri":"exams\/{exam}","methods":["GET","HEAD"]},"exams.edit":{"uri":"exams\/{exam}\/edit","methods":["GET","HEAD"]},"exams.update":{"uri":"exams\/{exam}","methods":["PUT","PATCH"]},"exams.destroy":{"uri":"exams\/{exam}","methods":["DELETE"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };