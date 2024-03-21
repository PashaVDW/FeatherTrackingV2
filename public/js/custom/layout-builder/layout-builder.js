"use strict";var KTLayoutBuilder=function(){var e=document.querySelector("#kt_layout_builder_form"),t=document.querySelector("#kt_layout_builder_action"),o=document.querySelector("#kt_layout_builder_tab"),r=e.getAttribute("action"),a=document.querySelector("#kt_layout_builder_preview"),i=document.querySelector("#kt_layout_builder_export"),n=document.querySelector("#kt_layout_builder_reset");return{init:function(){var c,u,s;a.addEventListener("click",(function(o){o.preventDefault(),t.value="preview",a.setAttribute("data-kt-indicator","on");var i=$(e).serialize();$.ajax({type:"POST",dataType:"html",url:r,data:i,success:function(e,t,o){toastr.success("Preview has been updated with current configured dashboard.","Preview updated!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0}),setTimeout((function(){history.scrollRestoration&&(history.scrollRestoration="manual"),location.reload()}),1500)},error:function(e){toastr.error("Please try it again later.","Something went wrong!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0})},complete:function(){a.removeAttribute("data-kt-indicator")}})})),i.addEventListener("click",(function(o){o.preventDefault(),toastr.success("Process has been started and it may take a while.","Generating HTML!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0}),i.setAttribute("data-kt-indicator","on"),t.value="export";var a=$(e).serialize();$.ajax({type:"POST",dataType:"html",url:r,data:a,success:function(e,t,o){var a=setInterval((function(){$("<iframe/>").attr({src:r+"?dashboard-builder[action]=export&download=1&output="+e,style:"visibility:hidden;display:none"}).ready((function(){clearInterval(a),i.removeAttribute("data-kt-indicator")})).appendTo("body")}),3e3)},error:function(e){toastr.error("Please try it again later.","Something went wrong!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0}),i.removeAttribute("data-kt-indicator")}})})),n.addEventListener("click",(function(o){o.preventDefault(),n.setAttribute("data-kt-indicator","on"),t.value="reset";var a=$(e).serialize();$.ajax({type:"POST",dataType:"html",url:r,data:a,success:function(e,t,o){toastr.success("Preview has been successfully reset and the page will be reloaded.","Reset Preview!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0}),setTimeout((function(){history.scrollRestoration&&(history.scrollRestoration="manual"),location.reload()}),1500)},error:function(e){toastr.error("Please try it again later.","Something went wrong!",{timeOut:0,extendedTimeOut:0,closeButton:!0,closeDuration:0})},complete:function(){n.removeAttribute("data-kt-indicator")}})})),[].slice.call(document.querySelectorAll('#kt_layout_builder_tabs a[data-bs-toggle="tab"]')).forEach((function(e){e.addEventListener("shown.bs.tab",(function(t){o.value=e.getAttribute("href").substring(1)}))})),c=document.querySelector("#kt_layout_builder_theme_mode_light"),u=document.querySelector("#kt_layout_builder_theme_mode_dark"),s=document.querySelector("#kt_layout_builder_theme_mode_"+KTThemeMode.getMode()),c&&c.addEventListener("click",(function(){this.checked=!0,this.closest('[data-kt-buttons="true"]').querySelector(".form-check-image.active").classList.remove("active"),this.closest(".form-check-image").classList.add("active"),KTThemeMode.setMode("light")})),u&&u.addEventListener("click",(function(){this.checked=!0,this.closest('[data-kt-buttons="true"]').querySelector(".form-check-image.active").classList.remove("active"),this.closest(".form-check-image").classList.add("active"),KTThemeMode.setMode("dark")})),s&&(s.closest(".form-check-image").classList.add("active"),s.checked=!0)}}}();KTUtil.onDOMContentLoaded((function(){KTLayoutBuilder.init()}));
