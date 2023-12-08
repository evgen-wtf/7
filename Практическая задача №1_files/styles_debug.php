.user-report img {
  height: auto; }

input.newerror {
  border-color: red; }

select.newerror {
  border-color: red; }

.sdo-loader-container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #000;
  opacity: 0.5; }
  .sdo-loader-container .sdo-loader-block {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 120px;
    max-height: 120px;
    width: 100%;
    height: 100%; }
    .sdo-loader-container .sdo-loader-block .sdo-loader {
      background-color: #fff;
      border: 16px solid #d4d4d5;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 100%;
      height: 100%;
      -webkit-animation: spin 2s linear infinite;
      /* Safari */
      animation: spin 2s linear infinite; }
  .sdo-loader-container.fixed {
    position: fixed;
    z-index: 99999; }

.sdo-loader-parrent {
  overflow: hidden !important;
  position: relative !important; }

@keyframes spin {
  0% {
    transform: rotate(0deg); }

  100% {
    transform: rotate(360deg); } }
/*Стили, которые были в styles.css*/
[data-region="drawer"] {
  padding: 0px !important; }

button {
  background: transparent;
  border: none; }
  button:focus {
    outline: none; }
