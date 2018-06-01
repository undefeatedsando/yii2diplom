<?php
namespace frontend\models;

class ServiceNameTranslation {
        protected static $arrayOfTypes = [
            
                "project" => "Расчет проектов",
                "supply" => "Поставщики",
                "factory" => "Фабрики",
                "account" => "Налоговый учет",
                "intellectual" => "Интеллектуальная собственность",
                "contract" => "Заключение договоров",
                "reference" => "Справки и выписки",
                "meeting" => "Организация мероприятий",
                "grant" => "Льготы и субсидии",
                "investment" => "Привлечение инвестиций",
                "ads" => "Реклама и продвижение",
                "global" => "Поддержка международного бизнеса",
                "grade" => "Экспертиза, оценка, сертификация",
                "education" => "Подготовка кадров",
            
        ];
        
        public static function translateRusToLat($param){
            return array_search($param, self::$arrayOfTypes);
        }
        public static function translateLatToRus($param){
            return self::$arrayOfTypes[$param];
        }
        public static function getAllRusNames(){
            $result = [];
            foreach ($this->arrayOfTypes as $key => $value){
                array_push($result, $value);
            }
            return $result;
        }
        public static function getAllLatNames(){
            $result = [];
            foreach ($this->arrayOfTypes as $key => $value){
                array_push($result, $key);
            }
            return $result;
        }
        
        public static function getNamesArr(){
            return self::$arrayOfTypes;
        }
        
        public function check($smth){
            echo json_encode($smth);
        }

}
