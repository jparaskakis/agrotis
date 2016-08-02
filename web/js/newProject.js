function initialize_new() {


    TEAM_REQUESTS_HTML = '<div class="col-md-offset-2 col-md-8 errornotification" id="errornotification"></div>';

    STORE_HTML = '' +
        '<div class="main_content_store">' +
        '<div class="col-md-12" style="margin-bottom: 10px;">' +
        '<div class="newproject_store_label">Store Unit Price</div>' +
        '<input id="pr_storeprice" class="newproject_store_input" type="text" name="newptitle" placeholder="0.0"></div>' +
        '<div class="col-md-12" style="margin-bottom: 10px;">' +
        '<div class="newproject_store_label">Buy out Price</div>' +
        '<input id="pr_buyprice" class="newproject_store_input" type="text" name="newptitle" placeholder="0.0"></div>' +
        '<div class="col-md-12" style="margin-bottom: 10px;">' +
        '<div class="newproject_store_label">Store Images</div>' +
        '</div>' +
        '<div id="storeAssetContainer" class="col-md-12">' +
        '<div class="storeAsset image hover_pointer" xmlns="http://www.w3.org/1999/html"' +
        'onclick="uploadStoreAsset()">' +
        '<i class="fa fa-upload"></i>' +
        '</div>';

    TEAM_COLLABORATOR_HTML = '<div class="col-md-offset-2 col-md-8 errornotification" id="errornotification"></div>' +
        '<div class="collaborator_box">' +
        '<div class="collaborator_thumbnail collaborator_me" title="New Project" >' +
        '<div class="user_group author"></div>' +
        '<div class="avatar" style="background-image: url(' + user_avatar + '); background-size: cover"></div>' +
        '<div class="favourite"><i class="fa fa-heart" style="font-size: 24px;"></i> </div>' +
        '<div class="percentage">100%</div>' +
        '<div class="ranking"><i class="fa fa-star" style="font-size: 15px;"></i> ' + user_ranking + ' </div>' +
        '<div class="col-md-12" style="font-size: 25px; text-align: center; padding: 0px !important; ">Me</div>' +
        '<div class="col-md-12" style="font-size: 15px; text-align: center; padding: 0px !important;">' + user_user_group + '</div>' +
        '</div>' +
        '</div>';


    STORE_HTML += '</div>' +
            //'<div class="col-md-12"><div class="qt_save_button" onclick="saveProject()">Save</div></div>' +
        '</div>';


    ASSETS_HTML = '<div class="asset_top_container">' +
        '<div class="space_used"></div><div id="uploadAssetButton" onclick="uploadAtAsset2()" class="uploadAssetButton hover_pointer">+ Upload</div>' +
        '<div class="collaborators_placeholders">' +
        '<div class="collaborator">' +
        '<div class="usergroup">Me</div>' +
        '<div class="avatar" style="background-image: url(' + user_avatar + ')"></div>' +
        '<div class="number_assets" style="margin-top: 67px">0</div>' +
        '</div>';


    ASSETS_HTML += '</div>' +
        '</div>' +
        '</div>' +
        '<div class="all_assets">' +
        '<div class="assets_placeholder"><div class="empty_container"><i class="fa fa-exclamation-triangle" style="font-size: 36px;"></i> You have no Assets yet! Please save the project before uploading!</div>';


    ASSETS_HTML += '</div>' +
        '</div>';


    var hash = window.location.hash.substring(1);
    if (!hash || hash === "" || hash === "general") {
        presentGeneralByAnchor();
    } else if (hash === "team") {
        presentTeamByAnchor();
    } else if (hash === "assets") {
        presentAssetsByAnchor();
    } else if (hash === "store") {
        presentStoreByAnchor()
    } else if (hash === "authoring_tool") {
        presentATByAnchor(false);
    } else {
        presentGeneralByAnchor();
    }

    //$("#qt_save_button").css("display", "none");
}


var max_percentage = 100;
function adaptRange(mode, initial_value) {
    if (mode == 1) {
        $("#selectedpercentage").val($("#percentage").val())
    } else if (mode == 0) {
        if ($("#selectedpercentage").val() > max_percentage) {
            $("#selectedpercentage").val(max_percentage)
        }
        $("#percentage").val($("#selectedpercentage").val())

    } else {
        $("#selectedpercentage").val(0);
        $("#selectedpercentage").attr("max", initial_value);
        $("#percentage").val(0);
        $("#percentage").attr("max", initial_value);
        max_percentage = initial_value
    }
}

function uploadAtAsset2() {
    displayError("Please save the project first!")
}

function saveProject() {


    console.log(PID);
    console.log(PVID);
    var pid = "new"

    if (isInGeneral) {
        pr_title = $("#pr_title").val();
        pr_version = $("#pr_version").val();
        pr_genre = $("#pr_genre").val();
        pr_lang = $("#pr_lang").val();
        pr_content = $("#pr_content").val();
        pr_literacy = $("#pr_literacy").val();
        pr_age = $("#pr_age").val();
        pr_description = $("#pr_description").val();
    } else {
        pr_storeprice = $("#pr_storeprice").val();
        pr_buyprice = $("#pr_buyprice").val();
    }

    goToAnchor("settings");

    if (PID != "new") {
        $.ajax({
            url: server_address + 'api/editProject',  //server script to process data
            type: 'POST',
            data: {
                key: key,
                pid: PID,
                vid: PVID,
                store_price: pr_storeprice,
                buy_price: pr_buyprice,
                description: $("#pr_description").val(),
            },
            complete: completeHandler = function (data) {
                if (data.responseText.indexOf("<success") != -1) {
                    displayIt("Project Saved")
                } else {
                    displayError("Error Saving")
                }
            }
        });
    } else {

        if (pr_title != "") {
            $.ajax({
                url: server_address + 'api/validateField',
                type: 'POST',
                data: {
                    version: "1",
                    field: "project_title",
                    value: pr_title
                },
                complete: completeHandler = function (data) {
                    if (data.responseText.indexOf("<error") != -1) {
                        $("#pr_title").addClass("errorDate")
                        displayError("This Project title already exists");
                        if ($("#pr_version").val() == "") {
                            $("#pr_version").addClass("errorDate")
                        } else {
                            $("#pr_version").removeClass("errorDate")
                        }
                        if ($("#pr_genre").val() == "0") {
                            $("#pr_genre").addClass("errorDate")
                        } else {
                            $("#pr_genre").removeClass("errorDate")
                        }
                        if ($("#pr_lang").val() == "0") {
                            $("#pr_lang").addClass("errorDate")
                        } else {
                            $("#pr_lang").removeClass("errorDate")
                        }
                        if ($("#pr_content").val() == "0") {
                            $("#pr_content").addClass("errorDate")
                        } else {
                            $("#pr_content").removeClass("errorDate")
                        }
                        if ($("#pr_literacy").val() == "0") {
                            $("#pr_literacy").addClass("errorDate")
                        } else {
                            $("#pr_literacy").removeClass("errorDate")
                        }
                        if ($("#pr_age").val() == "0") {
                            $("#pr_age").addClass("errorDate")
                        } else {
                            $("#pr_age").removeClass("errorDate")
                        }
                        if ($("#pr_description").val() == "") {
                            $("#pr_description").addClass("errorDate")
                        } else {
                            $("#pr_description").removeClass("errorDate")
                        }

                    } else {
                        $("#pr_title").removeClass("errorDate")
                        if ($("#pr_version").val() == "") {
                            $("#pr_version").addClass("errorDate")
                        } else {
                            $("#pr_version").removeClass("errorDate")
                        }
                        if ($("#pr_genre").val() == "0") {
                            $("#pr_genre").addClass("errorDate")
                        } else {
                            $("#pr_genre").removeClass("errorDate")
                        }
                        if ($("#pr_lang").val() == "0") {
                            $("#pr_lang").addClass("errorDate")
                        } else {
                            $("#pr_lang").removeClass("errorDate")
                        }
                        if ($("#pr_content").val() == "0") {
                            $("#pr_content").addClass("errorDate")
                        } else {
                            $("#pr_content").removeClass("errorDate")
                        }
                        if ($("#pr_literacy").val() == "0") {
                            $("#pr_literacy").addClass("errorDate")
                        } else {
                            $("#pr_literacy").removeClass("errorDate")
                        }
                        if ($("#pr_age").val() == "0") {
                            $("#pr_age").addClass("errorDate")
                        } else {
                            $("#pr_age").removeClass("errorDate")
                        }
                        if ($("#pr_description").val() == "") {
                            $("#pr_description").addClass("errorDate")
                        } else {
                            $("#pr_description").removeClass("errorDate")
                        }


                        console.log(ALL_FILES_IN_NEW);
                        console.log(ICON_IMAGE);


                        if ($(".errorDate").length == 0) {

                            $.ajax({
                                url: server_address + 'api/createProject',  //server script to process data
                                type: 'POST',
                                data: {
                                    key: key,
                                    title: $("#pr_title").val(),
                                    genre_category: $("#pr_genre").val(),
                                    age_category: $("#pr_age").val(),
                                    literacy_category: $("#pr_literacy").val(),
                                    content_category: $("#pr_content").val(),
                                    version_number: $("#pr_version").val(),
                                    store_price: pr_storeprice,
                                    buy_price: pr_buyprice,
                                    language: $("#pr_lang").val(),
                                    description: $("#pr_description").val(),
                                },
                                complete: completeHandler = function (data) {
                                    if (data.responseText.indexOf("ERROR") == -1) {

                                        pid = data.responseText.split("@@")[1]
                                        var pvid = data.responseText.split("@@")[2]

                                        for (var i = 0; i < ALL_FILES_IN_NEW.length; i++) {
                                            if (ALL_FILES_IN_NEW[i] != null) {
                                                var files = ALL_FILES_IN_NEW[i]
                                                var formData = tests.formdata ? new FormData() : null;

                                                if (tests.formdata) formData.append('store_asset', ALL_FILES_IN_NEW[i]);


                                                var file = ALL_FILES_IN_NEW[i]
                                                name = file.name;
                                                size = file.size;
                                                type = file.type;
                                                getFileDimension(file)


                                                formData.append('action', "upload_store_asset");
                                                formData.append('PID', pid);
                                                formData.append('PVID', pvid);
                                                formData.append('filesize', file.size);


                                                if (tests.formdata) {
                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open('POST', '/uploader');
                                                    xhr.onload = function () {

                                                    };

                                                    if (tests.progress) {
                                                        xhr.upload.onprogress = function (event) {
                                                            if (event.lengthComputable) {
                                                                var complete = (event.loaded / event.total * 100 | 0);


                                                            }
                                                        }
                                                    }

                                                    xhr.onreadystatechange = function () {
                                                        if (xhr.readyState == 4) {

                                                        }
                                                    }
                                                    xhr.send(formData);
                                                }
                                            }

                                        }

                                        if (ICON_IMAGE) {
                                            var formData = tests.formdata ? new FormData() : null;
                                            if (tests.formdata) formData.append('thumbnail', ICON_IMAGE);


                                            var file = ICON_IMAGE
                                            name = file.name;
                                            size = file.size;
                                            type = file.type;
                                            getFileDimension(file)


                                            formData.append('action', "upload_thumbnail");
                                            formData.append('PID', pid);
                                            formData.append('filesize', file.size);


                                            if (tests.formdata) {
                                                var xhr = new XMLHttpRequest();
                                                xhr.open('POST', '/uploader');
                                                xhr.onload = function () {

                                                };

                                                if (tests.progress) {
                                                    xhr.upload.onprogress = function (event) {
                                                        if (event.lengthComputable) {
                                                            var complete = (event.loaded / event.total * 100 | 0);


                                                        }
                                                    }
                                                }

                                                xhr.onreadystatechange = function () {
                                                    if (xhr.readyState == 4) {

                                                    }
                                                }
                                                xhr.send(formData);
                                            }
                                        }
                                        setTimeout(function () {
                                            //window.location = "/project/" + pid
                                        }, 2000);
                                    }
                                    else {
                                        displayError("Error Creating the Project! Please try again later.")
                                    }

                                }
                            });

                        }


                    }
                },
                error: errorHandler = function () {

                }
            });
        } else {
            displayError("Please fill all the required fields");
            if ($("#pr_title").val() == "") {
                $("#pr_title").addClass("errorDate")
            } else {
                $("#pr_title").removeClass("errorDate")
            }
            if ($("#pr_version").val() == "") {
                $("#pr_version").addClass("errorDate")
            } else {
                $("#pr_version").removeClass("errorDate")
            }
            if ($("#pr_genre").val() == "0") {
                $("#pr_genre").addClass("errorDate")
            } else {
                $("#pr_genre").removeClass("errorDate")
            }
            if ($("#pr_lang").val() == "0") {
                $("#pr_lang").addClass("errorDate")
            } else {
                $("#pr_lang").removeClass("errorDate")
            }
            if ($("#pr_content").val() == "0") {
                $("#pr_content").addClass("errorDate")
            } else {
                $("#pr_content").removeClass("errorDate")
            }
            if ($("#pr_literacy").val() == "0") {
                $("#pr_literacy").addClass("errorDate")
            } else {
                $("#pr_literacy").removeClass("errorDate")
            }
            if ($("#pr_age").val() == "0") {
                $("#pr_age").addClass("errorDate")
            } else {
                $("#pr_age").removeClass("errorDate")
            }
            if ($("#pr_description").val() == "") {
                $("#pr_description").addClass("errorDate")
            } else {
                $("#pr_description").removeClass("errorDate")
            }
        }
    }
}