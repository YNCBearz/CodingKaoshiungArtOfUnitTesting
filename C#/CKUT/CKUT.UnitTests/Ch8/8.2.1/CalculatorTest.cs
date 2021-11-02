using CKUT.Core.Services.Ch8._8._2._1;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._1
{
    public class CalculatorTest
    {
        //只測試公有契約
        [Test]
        public void Should_Get_Correct_Result_When_Add_2_numbers()
        {
            var num1 = 2;
            var num2 = 2;
            var calculator = new Calculator(num1, num2);
            var result = calculator.Calculate(CalculateMethod.Plus);
            Assert.AreEqual(result, 4);
        }

        //把方法改成公開方法
        [Test]
        public void Should_Get_Correct_Result_When_Minus_2_numbers()
        {
            var num1 = 1;
            var num2 = 2;
            var calculator = new Calculator(num1, num2);
            var result = calculator.MinusTwoNumbers();
            Assert.AreEqual(result, -1);
        }

        //把方法改成靜態方法
        [Test]
        public void Should_Get_Correct_Round_Result()
        {
            var result = Calculator.RoundResult(1.1m);
            Assert.AreEqual(result, 1);
        }

        //把方法抽取到新類別中
        [Test]
        public void Should_Get_Correct_When_Multiply_2_numbers()
        {
            var num1 = 2;
            var num2 = 3;
            var calculator = new MultiplyCalculator(num1, num2);
            var result = calculator.MultiplyTwoNumbers();
            Assert.AreEqual(result, 6);
        }

        //把方法改成內部方法
        [Test]
        public void Should_Get_Correct_When_Devided_2_numbers()
        {
            var num1 = 3;
            var num2 = 2;
            var calculator = new Calculator(num1, num2);
            var result = calculator.DividedTwoNumbers();
            Assert.AreEqual(result, 2);
        }
    }
}