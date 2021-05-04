using System;
using NUnit.Framework;
using CKUT.Core.Services.Ch3.No7;
using FluentAssertions;
using NSubstitute;

namespace CKUT.UnitTests.Ch3
{
    [TestFixture]
    public class Ch3Test5
    {
        private string _fileName;
        private IFileExtensionManager _fileExtensionManager;
        private LogAnalyzer _logAnalyer;
        private ExtensionManagerFactory _extensionManagerFactory;

        [SetUp]
        public void SetUp()
        {
            _fileExtensionManager = new FakeManager();
            _extensionManagerFactory = new ExtensionManagerFactory();
            _extensionManagerFactory.SetManager(_fileExtensionManager);
            _logAnalyer = new LogAnalyzer();
        }

        [Test]
        public void LogAnalyzer_Should_Support_TxtFile()
        {
            GivenTxtFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(true);
        }

        [Test]
        public void LogAnalyzer_Should_Not_Support_PngFile()
        {
            GivenPngFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(false);
        }

        private void GivenTxtFileName()
        {
            _fileName = "1.txt";
        }

        private void GivenPngFileName()
        {
            _fileName = "1.png";
        }
    }
}