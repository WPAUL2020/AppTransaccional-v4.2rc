######################Importación de Modulo necesarios############################
import requests #Request para peticiones htlm
from lxml import etree #etree para manejo de xml
import ast # Paquete para la procesar árboles de la gramática de sintaxis abstracta
import json # Paquete para manejo convertir a JSON
from flask import Flask, jsonify, request, Response## PAQUETES DESDE FLASK PARA MANEJAR LAS PETICIONES Y RESPUESTAS
from flask_pymongo import PyMongo ## PAQUETE DE MONGO DB
from bson import json_util
from bson.objectid import ObjectId
##################################################################################
#######################Conexión a BD##############################################
app = Flask(__name__)
app.secret_key = 'myawesomesecretkey'
######################Parametros iniciales##########################################
BaseURL = 'https://www.instagram.com/'

@app.route('/ScrapTags', methods=['POST'])
def ScrapTags():
    req_data = request.get_json()
    tag = req_data['hashtag']
    url = BaseURL+'tags/'+tag
    #PETICIÓN A LA URL POR EL MÉTODO GET
    respuesta = requests.get(url)
    #SE UTILIZA EL MÉTODO "raise_for_status()" DEL PAQUETE REQUEST PARA VALIDAR SIN LA RESPUESTA FUE EXITOSA
    respuesta.raise_for_status()
    #SE VALIDA LA RESPUESTA HTML SEA IGUAL A 200
    if respuesta.ok:
        #EN LA VARIABLE PPAL SE GUARDA LO QUE RETORNA LA CLASE HTML DEL PAQUETE ETREE,
        #AL CUAL SE LE PASA COMO PARAMETRO EL CONTENIDO HTML OBTENIDO DE LA PETICIÓN
        ppal = etree.HTML(respuesta.content)
        ################SE EMPIEZA A TRABJAR CON EL CONTENIDO #######################################################
        #1) SE BUSCA POR CON AYUDA DEL LA CLASE XPATH SE BUSCA POR EXPRESIÓN REGULAR TODO LO QUE ESTE EN LA POSICIÓN
        #   Y SE OBTIENE EN FORMATO TEXT CON TEXT
        data_raw = ppal.xpath("//script[contains(text(), 'entry_data')]")[0].text
        #2) SE GENERA EL DICTIONARIO CON AYUDA DEL METODO FIND() QUE BUSCA EN UN STRING  PARA LA CLAVES
        #   SE GENERAN LOS VALORES CON EL METODO REFIND() QUE DEVUELVE EL ÍNDICE MÁS ALTO DE LA SUBCADENA
        data_raw = data_raw[data_raw.find('{'): data_raw.rfind('}') + 1]
        #3) SE REMPLAZA TODO LO QUE SE ENCUENTRE COMO false,true O null a SINTAXIS DE PYTHON
        data_raw = data_raw.replace('false', 'False')
        data_raw = data_raw.replace('true', 'True')
        data_raw = data_raw.replace('null', 'None')
        #4) SE EVALÚA DE FORMA SEGURA UN NODO DE EXPRESIÓN O UNA CADENA CODIFICADA CON ast.literal_eval()
        # Y SE INDICA QUE ES DE SINTAXIS ABSTRACTA
        data_dict = ast.literal_eval(data_raw)
        # SE REALZA CONVERSIÓN DE JSON
        app_json = json.dumps(data_dict)
        return Response(app_json, mimetype="application/json")

@app.route('/ScrapUser', methods=['POST'])
def ScrapUser():
    req_data = request.get_json()
    tag = req_data['usuario']
    url = BaseURL+tag
    #PETICIÓN A LA URL POR EL MÉTODO GET
    respuesta = requests.get(url)
    #SE UTILIZA EL MÉTODO "raise_for_status()" DEL PAQUETE REQUEST PARA VALIDAR SIN LA RESPUESTA FUE EXITOSA
    respuesta.raise_for_status()
    #SE VALIDA LA RESPUESTA HTML SEA IGUAL A 200
    if respuesta.ok:
        #EN LA VARIABLE PPAL SE GUARDA LO QUE RETORNA LA CLASE HTML DEL PAQUETE ETREE,
        #AL CUAL SE LE PASA COMO PARAMETRO EL CONTENIDO HTML OBTENIDO DE LA PETICIÓN
        ppal = etree.HTML(respuesta.content)
        ################SE EMPIEZA A TRABJAR CON EL CONTENIDO #######################################################
        #1) SE BUSCA POR CON AYUDA DEL LA CLASE XPATH SE BUSCA POR EXPRESIÓN REGULAR TODO LO QUE ESTE EN LA POSICIÓN
        #   Y SE OBTIENE EN FORMATO TEXT CON TEXT
        data_raw = ppal.xpath("//script[contains(text(), 'entry_data')]")[0].text
        #2) SE GENERA EL DICTIONARIO CON AYUDA DEL METODO FIND() QUE BUSCA EN UN STRING  PARA LA CLAVES
        #   SE GENERAN LOS VALORES CON EL METODO REFIND() QUE DEVUELVE EL ÍNDICE MÁS ALTO DE LA SUBCADENA
        data_raw = data_raw[data_raw.find('{'): data_raw.rfind('}') + 1]
        #3) SE REMPLAZA TODO LO QUE SE ENCUENTRE COMO false,true O null a SINTAXIS DE PYTHON
        data_raw = data_raw.replace('false', 'False')
        data_raw = data_raw.replace('true', 'True')
        data_raw = data_raw.replace('null', 'None')
        #4) SE EVALÚA DE FORMA SEGURA UN NODO DE EXPRESIÓN O UNA CADENA CODIFICADA CON ast.literal_eval()
        # Y SE INDICA QUE ES DE SINTAXIS ABSTRACTA
        data_dict = ast.literal_eval(data_raw)
        # SE REALZA CONVERSIÓN DE JSON
        app_json = json.dumps(data_dict)
        return Response(app_json, mimetype="application/json")

@app.route('/ScrapUser', methods=['POST'])
def ScrapFindByUser():
    req_data = request.get_json()
    tag = req_data['id_usuario']
    url = BaseURL+'p/'+tag
    #PETICIÓN A LA URL POR EL MÉTODO GET
    respuesta = requests.get(url)
    #SE UTILIZA EL MÉTODO "raise_for_status()" DEL PAQUETE REQUEST PARA VALIDAR SIN LA RESPUESTA FUE EXITOSA
    respuesta.raise_for_status()
    #SE VALIDA LA RESPUESTA HTML SEA IGUAL A 200
    if respuesta.ok:
        #EN LA VARIABLE PPAL SE GUARDA LO QUE RETORNA LA CLASE HTML DEL PAQUETE ETREE,
        #AL CUAL SE LE PASA COMO PARAMETRO EL CONTENIDO HTML OBTENIDO DE LA PETICIÓN
        ppal = etree.HTML(respuesta.content)
        ################SE EMPIEZA A TRABJAR CON EL CONTENIDO #######################################################
        #1) SE BUSCA POR CON AYUDA DEL LA CLASE XPATH SE BUSCA POR EXPRESIÓN REGULAR TODO LO QUE ESTE EN LA POSICIÓN
        #   Y SE OBTIENE EN FORMATO TEXT CON TEXT
        data_raw = ppal.xpath("//script[contains(text(), 'entry_data')]")[0].text
        #2) SE GENERA EL DICTIONARIO CON AYUDA DEL METODO FIND() QUE BUSCA EN UN STRING  PARA LA CLAVES
        #   SE GENERAN LOS VALORES CON EL METODO REFIND() QUE DEVUELVE EL ÍNDICE MÁS ALTO DE LA SUBCADENA
        data_raw = data_raw[data_raw.find('{'): data_raw.rfind('}') + 1]
        #3) SE REMPLAZA TODO LO QUE SE ENCUENTRE COMO false,true O null a SINTAXIS DE PYTHON
        data_raw = data_raw.replace('false', 'False')
        data_raw = data_raw.replace('true', 'True')
        data_raw = data_raw.replace('null', 'None')
        #4) SE EVALÚA DE FORMA SEGURA UN NODO DE EXPRESIÓN O UNA CADENA CODIFICADA CON ast.literal_eval()
        # Y SE INDICA QUE ES DE SINTAXIS ABSTRACTA
        data_dict = ast.literal_eval(data_raw)
        # SE REALZA CONVERSIÓN DE JSON
        app_json = json.dumps(data_dict)
        return Response(app_json, mimetype="application/json")

if __name__ == "__main__":
    app.run(debug=True)

