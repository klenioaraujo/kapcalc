class GetCalc {

    somar(num1, num2) {     
        return calcserver('somar', num1, num2);
    }

    subtrair(num1, num2) {
        return calcserver('subtrair', num1, num2);
    }

    dividir(num1, num2) {
        return calcserver('dividir', num1, num2);
    }

    multiplicar(num1, num2) {
        return calcserver('multiplicar', num1, num2);
    }
} 