/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/
(() => { // webpackBootstrap
    /******/
    var __webpack_modules__ = ({

        /***/ "./resources/js/app.js":
        /*!*****************************!*\
          !*** ./resources/js/app.js ***!
          \*****************************/
        /***/ (() => {

            eval("// require('./bootstrap');\n//\n// function myFunction() {\n//     document.getElementById(\"creatDiv\").style.display = \"block\";\n// }\nfunction initMap() {\n  // The location of Uluru\n  var uluru = {\n    lat: 40.179694,\n    lng: 44.514234\n  };\n  var locations = {\n    operaHouse: {\n      lat: 40.169208,\n      lng: 44.513450\n    },\n    tarongaZoo: {\n      lat: 40.179694,\n      lng: 44.514234\n    },\n    manlyBeach: {\n      lat: 40.170266,\n      lng: 44.489019\n    },\n    hyderPark: {\n      lat: 40.176317,\n      lng: 44.631250\n    },\n    theRocks: {\n      lat: 40.220603,\n      lng: 44.504305\n    },\n    circularQuay: {\n      lat: 40.285746,\n      lng: 44.480304\n    },\n    harbourBridge: {\n      lat: 39.970228,\n      lng: 44.501698\n    },\n    kingsCross: {\n      lat: 40.188922,\n      lng: 44.613693\n    }\n  }; // The map, centered at Uluru\n\n  var map = new google.maps.Map(document.getElementById(\"map-container-google-1\"), {\n    zoom: 8,\n    center: uluru\n  });\n  var markers = [];\n\n  for (var location in locations) {\n    var markerOptions = {\n      // The marker, positioned at Uluru\n      // const marker = new google.maps.Marker({\n      position: locations[location],\n      map: map\n    };\n    var marker = new google.maps.Marker(markerOptions);\n    markers.push(marker);\n  }\n\n  return markers;\n}\n\nwindow.initMap = initMap; //\n// let pageURL = $(location).attr(\"href\");\n// const myArray = pageURL.split(\"/\");\n// alert(myArray)\n\n$(\".fav-button\").click(function () {\n  $(this).css(\"color\", \"red\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzP2NlZDYiXSwibmFtZXMiOlsiaW5pdE1hcCIsInVsdXJ1IiwibGF0IiwibG5nIiwibG9jYXRpb25zIiwib3BlcmFIb3VzZSIsInRhcm9uZ2Fab28iLCJtYW5seUJlYWNoIiwiaHlkZXJQYXJrIiwidGhlUm9ja3MiLCJjaXJjdWxhclF1YXkiLCJoYXJib3VyQnJpZGdlIiwia2luZ3NDcm9zcyIsIm1hcCIsImdvb2dsZSIsIm1hcHMiLCJNYXAiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiem9vbSIsImNlbnRlciIsIm1hcmtlcnMiLCJsb2NhdGlvbiIsIm1hcmtlck9wdGlvbnMiLCJwb3NpdGlvbiIsIm1hcmtlciIsIk1hcmtlciIsInB1c2giLCJ3aW5kb3ciLCIkIiwiY2xpY2siLCJjc3MiXSwibWFwcGluZ3MiOiJBQUFBO0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFNQSxTQUFTQSxPQUFULEdBQW1CO0FBQ2Y7QUFDQSxNQUFNQyxLQUFLLEdBQUc7QUFBRUMsSUFBQUEsR0FBRyxFQUFFLFNBQVA7QUFBa0JDLElBQUFBLEdBQUcsRUFBRTtBQUF2QixHQUFkO0FBRUEsTUFBTUMsU0FBUyxHQUFHO0FBQ2RDLElBQUFBLFVBQVUsRUFBRTtBQUFFSCxNQUFBQSxHQUFHLEVBQUUsU0FBUDtBQUFrQkMsTUFBQUEsR0FBRyxFQUFFO0FBQXZCLEtBREU7QUFFZEcsSUFBQUEsVUFBVSxFQUFFO0FBQUVKLE1BQUFBLEdBQUcsRUFBRSxTQUFQO0FBQWtCQyxNQUFBQSxHQUFHLEVBQUU7QUFBdkIsS0FGRTtBQUdkSSxJQUFBQSxVQUFVLEVBQUU7QUFBRUwsTUFBQUEsR0FBRyxFQUFFLFNBQVA7QUFBa0JDLE1BQUFBLEdBQUcsRUFBRTtBQUF2QixLQUhFO0FBSWRLLElBQUFBLFNBQVMsRUFBRTtBQUFFTixNQUFBQSxHQUFHLEVBQUUsU0FBUDtBQUFrQkMsTUFBQUEsR0FBRyxFQUFFO0FBQXZCLEtBSkc7QUFLZE0sSUFBQUEsUUFBUSxFQUFFO0FBQUVQLE1BQUFBLEdBQUcsRUFBRSxTQUFQO0FBQWtCQyxNQUFBQSxHQUFHLEVBQUU7QUFBdkIsS0FMSTtBQU1kTyxJQUFBQSxZQUFZLEVBQUU7QUFBRVIsTUFBQUEsR0FBRyxFQUFFLFNBQVA7QUFBa0JDLE1BQUFBLEdBQUcsRUFBRTtBQUF2QixLQU5BO0FBT2RRLElBQUFBLGFBQWEsRUFBRTtBQUFFVCxNQUFBQSxHQUFHLEVBQUUsU0FBUDtBQUFrQkMsTUFBQUEsR0FBRyxFQUFFO0FBQXZCLEtBUEQ7QUFRZFMsSUFBQUEsVUFBVSxFQUFFO0FBQUVWLE1BQUFBLEdBQUcsRUFBRSxTQUFQO0FBQWtCQyxNQUFBQSxHQUFHLEVBQUU7QUFBdkI7QUFSRSxHQUFsQixDQUplLENBZWY7O0FBRUEsTUFBTVUsR0FBRyxHQUFHLElBQUlDLE1BQU0sQ0FBQ0MsSUFBUCxDQUFZQyxHQUFoQixDQUFvQkMsUUFBUSxDQUFDQyxjQUFULENBQXdCLHdCQUF4QixDQUFwQixFQUFzRTtBQUM5RUMsSUFBQUEsSUFBSSxFQUFFLENBRHdFO0FBRTlFQyxJQUFBQSxNQUFNLEVBQUVuQjtBQUZzRSxHQUF0RSxDQUFaO0FBT0EsTUFBTW9CLE9BQU8sR0FBRyxFQUFoQjs7QUFDQSxPQUFLLElBQU1DLFFBQVgsSUFBdUJsQixTQUF2QixFQUFrQztBQUM5QixRQUFNbUIsYUFBYSxHQUFHO0FBQ2xCO0FBQ0E7QUFDSUMsTUFBQUEsUUFBUSxFQUFFcEIsU0FBUyxDQUFDa0IsUUFBRCxDQUhMO0FBSWRULE1BQUFBLEdBQUcsRUFBRUE7QUFKUyxLQUF0QjtBQVFBLFFBQU1ZLE1BQU0sR0FBRyxJQUFJWCxNQUFNLENBQUNDLElBQVAsQ0FBWVcsTUFBaEIsQ0FBdUJILGFBQXZCLENBQWY7QUFDQUYsSUFBQUEsT0FBTyxDQUFDTSxJQUFSLENBQWFGLE1BQWI7QUFDSDs7QUFFRCxTQUFPSixPQUFQO0FBQ0g7O0FBQ0RPLE1BQU0sQ0FBQzVCLE9BQVAsR0FBaUJBLE9BQWpCLEMsQ0FFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTZCLENBQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJDLEtBQW5CLENBQXlCLFlBQVc7QUFDaENELEVBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUUsR0FBUixDQUFZLE9BQVosRUFBcUIsS0FBckI7QUFDSCxDQUZEIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVxdWlyZSgnLi9ib290c3RyYXAnKTtcblxuXG4vL1xuLy8gZnVuY3Rpb24gbXlGdW5jdGlvbigpIHtcbi8vICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNyZWF0RGl2XCIpLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4vLyB9XG5cblxuXG5cblxuZnVuY3Rpb24gaW5pdE1hcCgpIHtcbiAgICAvLyBUaGUgbG9jYXRpb24gb2YgVWx1cnVcbiAgICBjb25zdCB1bHVydSA9IHsgbGF0OiA0MC4xNzk2OTQsIGxuZzogNDQuNTE0MjM0IH07XG5cbiAgICBjb25zdCBsb2NhdGlvbnMgPSB7XG4gICAgICAgIG9wZXJhSG91c2U6IHsgbGF0OiA0MC4xNjkyMDgsIGxuZzogNDQuNTEzNDUwIH0sXG4gICAgICAgIHRhcm9uZ2Fab286IHsgbGF0OiA0MC4xNzk2OTQsIGxuZzogNDQuNTE0MjM0IH0sXG4gICAgICAgIG1hbmx5QmVhY2g6IHsgbGF0OiA0MC4xNzAyNjYsIGxuZzogNDQuNDg5MDE5IH0sXG4gICAgICAgIGh5ZGVyUGFyazogeyBsYXQ6IDQwLjE3NjMxNywgbG5nOiA0NC42MzEyNTAgfSxcbiAgICAgICAgdGhlUm9ja3M6IHsgbGF0OiA0MC4yMjA2MDMsIGxuZzogNDQuNTA0MzA1IH0sXG4gICAgICAgIGNpcmN1bGFyUXVheTogeyBsYXQ6IDQwLjI4NTc0NiwgbG5nOiA0NC40ODAzMDQgfSxcbiAgICAgICAgaGFyYm91ckJyaWRnZTogeyBsYXQ6IDM5Ljk3MDIyOCwgbG5nOiA0NC41MDE2OTggfSxcbiAgICAgICAga2luZ3NDcm9zczogeyBsYXQ6IDQwLjE4ODkyMiwgbG5nOiA0NC42MTM2OTMgfSxcblxuICAgIH1cbiAgICAvLyBUaGUgbWFwLCBjZW50ZXJlZCBhdCBVbHVydVxuXG4gICAgY29uc3QgbWFwID0gbmV3IGdvb2dsZS5tYXBzLk1hcChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1hcC1jb250YWluZXItZ29vZ2xlLTFcIikse1xuICAgICAgICB6b29tOiA4LFxuICAgICAgICBjZW50ZXI6IHVsdXJ1LFxuICAgIH0pO1xuXG5cblxuICAgIGNvbnN0IG1hcmtlcnMgPSBbXTtcbiAgICBmb3IgKGNvbnN0IGxvY2F0aW9uIGluIGxvY2F0aW9ucykge1xuICAgICAgICBjb25zdCBtYXJrZXJPcHRpb25zID0ge1xuICAgICAgICAgICAgLy8gVGhlIG1hcmtlciwgcG9zaXRpb25lZCBhdCBVbHVydVxuICAgICAgICAgICAgLy8gY29uc3QgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XG4gICAgICAgICAgICAgICAgcG9zaXRpb246IGxvY2F0aW9uc1tsb2NhdGlvbl0sXG4gICAgICAgICAgICAgICAgbWFwOiBtYXAsXG5cbiAgICAgICAgICAgIH1cblxuICAgICAgICBjb25zdCBtYXJrZXIgPSBuZXcgZ29vZ2xlLm1hcHMuTWFya2VyKG1hcmtlck9wdGlvbnMpO1xuICAgICAgICBtYXJrZXJzLnB1c2gobWFya2VyKTtcbiAgICB9XG5cbiAgICByZXR1cm4gbWFya2Vycztcbn1cbndpbmRvdy5pbml0TWFwID0gaW5pdE1hcDtcblxuLy9cbi8vIGxldCBwYWdlVVJMID0gJChsb2NhdGlvbikuYXR0cihcImhyZWZcIik7XG4vLyBjb25zdCBteUFycmF5ID0gcGFnZVVSTC5zcGxpdChcIi9cIik7XG4vLyBhbGVydChteUFycmF5KVxuXG4kKCBcIi5mYXYtYnV0dG9uXCIgKS5jbGljayhmdW5jdGlvbigpIHtcbiAgICAkKHRoaXMpLmNzcyhcImNvbG9yXCIsIFwicmVkXCIpO1xufSk7XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FwcC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

            /***/
        }),

        /***/ "./resources/sass/app.scss":
        /*!*********************************!*\
          !*** ./resources/sass/app.scss ***!
          \*********************************/
        /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

            "use strict";
            eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz9hODBiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

            /***/
        }),

        /***/ "./resources/css/app.css":
        /*!*******************************!*\
          !*** ./resources/css/app.css ***!
          \*******************************/
        /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

            "use strict";
            eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvY3NzL2FwcC5jc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Nzcy9hcHAuY3NzPzllY2YiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/css/app.css\n");

            /***/
        })

        /******/
    });
    /************************************************************************/
    /******/ 	// The module cache
    /******/
    var __webpack_module_cache__ = {};
    /******/
    /******/ 	// The require function
    /******/
    function __webpack_require__(moduleId) {
        /******/ 		// Check if module is in cache
        /******/
        var cachedModule = __webpack_module_cache__[moduleId];
        /******/
        if (cachedModule !== undefined) {
            /******/
            return cachedModule.exports;
            /******/
        }
        /******/ 		// Create a new module (and put it into the cache)
        /******/
        var module = __webpack_module_cache__[moduleId] = {
            /******/ 			// no module.id needed
            /******/ 			// no module.loaded needed
            /******/            exports: {}
            /******/
        };
        /******/
        /******/ 		// Execute the module function
        /******/
        __webpack_modules__[moduleId](module, module.exports, __webpack_require__);
        /******/
        /******/ 		// Return the exports of the module
        /******/
        return module.exports;
        /******/
    }

    /******/
    /******/ 	// expose the modules object (__webpack_modules__)
    /******/
    __webpack_require__.m = __webpack_modules__;
    /******/
    /************************************************************************/
    /******/ 	/* webpack/runtime/chunk loaded */
    /******/
    (() => {
        /******/
        var deferred = [];
        /******/
        __webpack_require__.O = (result, chunkIds, fn, priority) => {
            /******/
            if (chunkIds) {
                /******/
                priority = priority || 0;
                /******/
                for (var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
                /******/
                deferred[i] = [chunkIds, fn, priority];
                /******/
                return;
                /******/
            }
            /******/
            var notFulfilled = Infinity;
            /******/
            for (var i = 0; i < deferred.length; i++) {
                /******/
                var [chunkIds, fn, priority] = deferred[i];
                /******/
                var fulfilled = true;
                /******/
                for (var j = 0; j < chunkIds.length; j++) {
                    /******/
                    if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
                        /******/
                        chunkIds.splice(j--, 1);
                        /******/
                    } else {
                        /******/
                        fulfilled = false;
                        /******/
                        if (priority < notFulfilled) notFulfilled = priority;
                        /******/
                    }
                    /******/
                }
                /******/
                if (fulfilled) {
                    /******/
                    deferred.splice(i--, 1)
                    /******/
                    var r = fn();
                    /******/
                    if (r !== undefined) result = r;
                    /******/
                }
                /******/
            }
            /******/
            return result;
            /******/
        };
        /******/
    })();
    /******/
    /******/ 	/* webpack/runtime/hasOwnProperty shorthand */
    /******/
    (() => {
        /******/
        __webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
        /******/
    })();
    /******/
    /******/ 	/* webpack/runtime/make namespace object */
    /******/
    (() => {
        /******/ 		// define __esModule on exports
        /******/
        __webpack_require__.r = (exports) => {
            /******/
            if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
                /******/
                Object.defineProperty(exports, Symbol.toStringTag, {value: 'Module'});
                /******/
            }
            /******/
            Object.defineProperty(exports, '__esModule', {value: true});
            /******/
        };
        /******/
    })();
    /******/
    /******/ 	/* webpack/runtime/jsonp chunk loading */
    /******/
    (() => {
        /******/ 		// no baseURI
        /******/
        /******/ 		// object to store loaded and loading chunks
        /******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
        /******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
        /******/
        var installedChunks = {
            /******/            "/js/app": 0,
            /******/            "css/app": 0
            /******/
        };
        /******/
        /******/ 		// no chunk on demand loading
        /******/
        /******/ 		// no prefetching
        /******/
        /******/ 		// no preloaded
        /******/
        /******/ 		// no HMR
        /******/
        /******/ 		// no HMR manifest
        /******/
        /******/
        __webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
        /******/
        /******/ 		// install a JSONP callback for chunk loading
        /******/
        var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
            /******/
            var [chunkIds, moreModules, runtime] = data;
            /******/ 			// add "moreModules" to the modules object,
            /******/ 			// then flag all "chunkIds" as loaded and fire callback
            /******/
            var moduleId, chunkId, i = 0;
            /******/
            if (chunkIds.some((id) => (installedChunks[id] !== 0))) {
                /******/
                for (moduleId in moreModules) {
                    /******/
                    if (__webpack_require__.o(moreModules, moduleId)) {
                        /******/
                        __webpack_require__.m[moduleId] = moreModules[moduleId];
                        /******/
                    }
                    /******/
                }
                /******/
                if (runtime) var result = runtime(__webpack_require__);
                /******/
            }
            /******/
            if (parentChunkLoadingFunction) parentChunkLoadingFunction(data);
            /******/
            for (; i < chunkIds.length; i++) {
                /******/
                chunkId = chunkIds[i];
                /******/
                if (__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
                    /******/
                    installedChunks[chunkId][0]();
                    /******/
                }
                /******/
                installedChunks[chunkId] = 0;
                /******/
            }
            /******/
            return __webpack_require__.O(result);
            /******/
        }
        /******/
        /******/
        var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
        /******/
        chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
        /******/
        chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
        /******/
    })();
    /******/
    /************************************************************************/
    /******/
    /******/ 	// startup
    /******/ 	// Load entry module and return exports
    /******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
    /******/
    __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
    /******/
    __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
    /******/
    var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
    /******/
    __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
    /******/
    /******/

})()
;


$( "#city" ).change(function() {

    if ($('#city').val() == 1){
      $('#erevan').css('display','flex')
    }
});

if (window.location.href.indexOf('post/')> -1){
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}
}

